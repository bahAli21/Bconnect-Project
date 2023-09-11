<?php

class UserSetting {

public string $UniqID;
public string $bio;
public string $status;
public string $privacy;
public string $notification;
private $conn;
public function __construct() {
  $this->conn = (new Database)->getConnexion();
}

public function setBio(string $bio): void {
  $this->updateField('usersettings', 'bio', $bio);
}

public function setStatus(string $status): void {
  $this->updateField('usersettings', 'status', $status);
}

public function setPrivacy(string $privacy): void {
  $this->updateField('usersettings', 'privacy', $privacy);
}

public function setNotification(string $notification): void {
  $this->updateField('usersettings', 'notification', $notification);
}

public function insertUserSettings($UniqID): bool {
  $sql = "INSERT INTO `usersettings` (userId) VALUES (?)";
  $statement = $this->conn->prepare($sql);
  $statement->execute([$UniqID]);
  if(!$statement) {
    return false;
  }
  return true;
}

    /**
 * Retrieve user information from the database.
 *
 * @return array|false Returns an array containing user information if successful, false otherwise.
 * @throws Exception If an error occurs during the retrieval process.
 */
public function getUserInformations() {
    $sql = "SELECT
                users.UID, users.lastName, users.firstName, users.email, users.password,
                usersinfo.profilePicture, usersinfo.location, usersinfo.phoneNumber,
                usersettings.bio, usersettings.status,
                usersettings.privacy, usersettings.notification
            FROM
                users
            INNER JOIN
                usersinfo ON users.UID = usersinfo.userId
            INNER JOIN
                usersettings ON users.UID = usersettings.userId
            WHERE users.id = :userID";

    try {
        $statement = $this->conn->prepare($sql);
        $statement->bindParam(':userID', $_SESSION['id']);
        $statement->execute();
        $data = $statement->fetch();

        return $data;
    } catch (PDOException $e) {
        throw new Exception("Error while retrieving user information: " . $e->getMessage());
    }
}

/**
 * Update a field in a specified table for the user.
 *
 * @param string $table The name of the table to update.
 * @param string $fieldName The name of the field to update.
 * @param string $fieldValue The new value for the field.
 *
 * @return bool Returns true if the update was successful, false otherwise.
 */
public function updateField($table, $fieldName, $fieldValue): bool {
    $sql = "UPDATE $table SET $fieldName = :fieldValue WHERE userId = :UID";
    try {
        $statement = $this->conn->prepare($sql);
        $statement->bindParam(':fieldValue', $fieldValue);
        $statement->bindParam(':UID', $this->getUserInformations()['UID']);
        $result = $statement->execute();
        if ($result) {
            return true;
        }
        return false;
    } catch (PDOException $e) {
        // Send an email notification indicating that the information update failed
        return false;
    }
}

}
