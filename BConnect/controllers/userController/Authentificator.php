<?php
session_start();
class Authentificator {

private array $post;
private array $file;
private string $UniqID;
private string $uniqImageName;

public function __construct($UniqID, $post, $file) {
  $this->post = $post;
  $this->file = $file;
  $this->UniqID = $UniqID;
}

Public function getUniqID(): string{
  return $this->UniqID;
}

Public function getUniqImageName(): string{
  return $this->uniqImageName;
}

public function setUniqImageName(string $name) {
  $this->uniqImageName = $name;
}


/**
 * Format the chosen file for upload, validate its type, and move it to the appropriate directory.
 *
 * @return bool Returns true if the file is successfully formatted and moved, false otherwise.
 */
public function formateFileChoosed(): bool {
    // Retrieve file information
    $image = $this->file['profilePicture'];
    $imageName = $image['name'];
    $imageSize = $image['size'];
    $imageTempName = $image['tmp_name'];
    $imageType = $image['type'];
    $explode = explode(".", $imageName);
    $lowercase = strtolower(end($explode));
    $extension = ["png", "jpg", "jpeg"];

    // Check if the file type is valid
    if (in_array($lowercase, $extension)) {
        $uploadDir = "assets/images/uploadImg/";
        $time = time();
        $this->setUniqImageName(uniqid() . $time . $imageName);

        $destinationPath = $uploadDir . $this->getUniqImageName();

        // Move the file to the destination directory
        if (move_uploaded_file($imageTempName, $destinationPath)) {
            return true;
        }
    }
    return false;
}

/**
 * Sign up a user by creating a new user account, storing user information, and settings.
 */
public function signUp() {
    $user = new User();
    $userInfo = new UserInfo();
    $userSetting = new UserSetting();
    $fileFormatted = $this->formateFileChoosed();

    if (empty($this->post['lastName']) || empty($this->post['firstName']) || empty($this->post['email']) ||
        empty($this->post['password']) || empty($this->file['profilePicture'])) {
        echo "Please fill in all the fields in the form.";
    } else {
        if ($user->checkEmail($this->post['email'])) {
            echo "This email already exists.";
        } else {
            if (strlen($this->post['password']) < 8) {
                echo "Your password must have at least 8 characters.";
            } else {
                $password = password_hash($this->post['password'], PASSWORD_DEFAULT);
                if ($fileFormatted) {
                    $user->insertUser($this->getUniqID(), $this->post['lastName'], $this->post['firstName'], $this->post['email'], $password);
                    $userInfo->insertUserInfos($this->getUniqID(), $this->getUniqImageName());
                    $userSetting->insertUserSettings($this->getUniqID());
                } else {
                    echo "Failed to save the file. Please choose a file in jpg, png, or jpeg format.";
                }
            }
        }
    }
}

/**
 * Sign in a user by verifying their login credentials and setting their status to "online."
 *
 * @return bool Returns true if the login is successful, false otherwise.
 */
public function signIn(): bool {
    $user = new User();
    $UID = $user->verifyLogin($this->post['email'], $this->post['password']);
    if ($UID) {
        $_SESSION['id'] = $UID;
        (new UserSetting)->setStatus("online");
        return true;
    }
    return false;
}

}
