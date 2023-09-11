<?php
require_once("UserSetting.php");
class User extends UserSetting {

private $conn;
public function __construct() {
    $this->conn = (new Database)->getConnexion();
}

public function setLastName(string $lastName): void {
    $this->updateField('users', 'lastName', $lastName);
}

public function setFirstName(string $firstName): void {
    $this->updateField('users', 'firstName', $firstName);
}

public function setEmail(string $email): void {
    $this->updateField('users', 'email', $email);
}

public function setPassword(string $password): void {
    $this->updateField('users', 'password', $password);
}

/**
 * Insert a new user into the 'users' table.
 *
 * @param string $UniqID The unique identifier of the user.
 * @param string $lastName The last name of the user.
 * @param string $firstName The first name of the user.
 * @param string $email The email address of the user.
 * @param string $password The hashed password of the user.
 *
 * @return bool Returns true if the insertion was successful, false otherwise.
 */
public function insertUser($UniqID, $lastName, $firstName, $email, $password): bool{
    $sql = "INSERT INTO `users` (UID, firstName, lastName, email, password) VALUES (?, ?, ?, ?, ?)";
    $statement = $this->conn->prepare($sql);
    $statement->execute([$UniqID, $firstName, $lastName, $email, $password]);
    if (!$statement) {
        return false;
    }
    return true;
}

/**
 * Check if an email address already exists in the 'users' table.
 *
 * @param string $email The email address to check.
 *
 * @return bool Returns true if the email exists, false otherwise.
 */
public function checkEmail($email): bool{
    $statement = $this->conn->prepare("SELECT * FROM `users` WHERE email = ?");
    $statement->execute([$email]);
    $userData = $statement->fetch();
    return (bool) $userData;
}

/**
 * Verify user login credentials.
 *
 * @param string $email The email address provided by the user.
 * @param string $password The password provided by the user.
 *
 * @return int|null Returns the user's ID if login is successful, or null otherwise.
 */
public function verifyLogin($email, $password){
    if ($this->checkEmail($email)) {
        $statement = $this->conn->prepare("SELECT * FROM `users` WHERE email = ?");
        $statement->execute([$email]);
        $userData = $statement->fetch();
        if ($userData && password_verify($password, $userData['password'])) {
            return $userData['id'];
        }
    }
}

}
