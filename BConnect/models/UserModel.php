<?php

interface UserModelInterface
{
  //public function createAcount($fullName, $email, $passwordHash, $userProfile, $createdAt): bool;
  public function insertUser($UID, $firstName, $lastName, $email, $password): bool;
  public function emailExist($email): bool;
  public function getUser($userId): array;
  public function login($email, $password);
  public function updateField($fieldName, $fieldValue): bool;
}


public function verifyEmail(string $email): bool
    {
        $data_base = Database::getConnection();
        $statement = $data_base->prepare("SELECT * FROM `login` WHERE email = ?");
        $statement->execute([$email]);
        $user = $statement->fetch();

        return (bool) $user;
    }


public function verifyLogin(): bool
    {
        $email = $this->getEmail();
        $password = $this->getPassword();
        if ($this->verifyEmail($email)) {
            $data_base = Database::getConnection();
            $statement = $data_base->prepare("SELECT * FROM `login` WHERE email = ?");
            $statement->execute([$email]);
            $user = $statement->fetch();

            if ($user && password_verify($password, $user['password'])) {
                return true;
            }
        }

        return false;
    }

class UserModel implements UserModelInterface {
    protected $conn;

    public function __construct() {
        $db = new Database;
        $this->conn = $db->getConnexion();
    }

    //     public function createAcount($fullName, $email, $passwordHash, $profilePhotoURL, $createdAt): bool {
    //
    //        //Default value
    //        $dateOfBirth = date('Y-m-d');
    //        $gender = 'Unspecified';
    //        $city = 'none';
    //        $phoneNumber = 'none';
    //        $privacySettings = 'Public';
    //        $accountStatus = 'Active';
    //        $lastLogin = date('Y-m-d');
    //        $onlineStatus = 'Offline';
    //        $followerCount = 0;
    //        $followingCount = 0;
    //        $verificationStatus = 'Not Verified';
    //        $notificationSettings = 'Active';
    //        $blockedUsers = 0;
    //        $updatedAt = $createdAt;
    //        $biography = 'none';
    //
    //     // Generate the SQL query
    //     $insertQuery = "INSERT INTO `users`
    //                     (FullName, Email, PasswordHash, DateOfBirth, Gender, ProfilePhotoURL,
    //                       City, PhoneNumber, PrivacySettings, AccountStatus, LastLogin, OnlineStatus,
    //                       FollowerCount, FollowingCount, VerificationStatus, NotificationSettings, BlockedUsers,
    //                        CreatedAt, UpdatedAt, Biography)
    //                     VALUES
    //                     ('{$fullName}', '{$email}', '{$passwordHash}', '{$dateOfBirth}', '{$gender}',
    //                       '{$profilePhotoURL}', '{$city}', '{$phoneNumber}', '{$privacySettings}',
    //                       '{$accountStatus}', '{$lastLogin}', '{$onlineStatus}', '{$followerCount}',
    //                       '{$followingCount}', '${verificationStatus}', '{$notificationSettings}',
    //                        '{$blockedUsers}', '{$createdAt}', '{$updatedAt}', '{$biography}')";
    //     // Execute the query
    //     $runInsertQuery = mysqli_query($this->conn, $insertQuery);
    //     if(!$runInsertQuery) {
    //         // echo "MySQL Error: " . mysqli_error($this->conn);
    //         return false;
    //     }
    //     return true;
    // }


    public function insertUser($UID, $firstName, $lastName, $email, $password): bool {

    // Generate the SQL query
    $sql = "INSERT INTO `users` (UID, firstName, lastName, email, password) VALUES (?, ?, ?, ?, ?)";
    $statement = $this->conn->prepare($sql);
    $statement->execute([$UID, $firstName, $lastName, $email, $password]);
    if(!$statement) {
      return false;
    }
    return true;
  }

  public function insertUserSettings($userId): bool {

  // Generate the SQL query
  $sql = "INSERT INTO `usersettings` (userId) VALUES (?)";
  $statement = $this->conn->prepare($sql);
  $statement->execute([$userId]);
  if(!$statement) {
    return false; 
  }
  return true;
}

public function insertUserInfos($userId, $profile): bool {

  // Generate the SQL query
  $sql = "INSERT INTO `usersinfo` (userId, profilePicture) VALUES (?, ?)";
  $statement = $this->conn->prepare($sql);
  $statement->execute([$userId, $profile]);
  if(!$statement) {
    return false;
  }
  return true;
}





    public function login($email, $password) {
        $loginQuery = "SELECT * FROM `users` WHERE Email = '$email'";
        $runGetLoginQuery = mysqli_query($this->conn, $loginQuery);

        if ($runGetLoginQuery && mysqli_num_rows($runGetLoginQuery) > 0) {
            $fetchData = mysqli_fetch_assoc($runGetLoginQuery);
            if (password_verify($password, $fetchData['PasswordHash'])) {
                return $fetchData;
            } else {
                return [];
            }
        }
      }


    public function emailExist($email): bool {
      $checkEmailQuery = "SELECT * FROM `users` WHERE Email = '{$email}'";
      $runCheckEmailQuery = mysqli_query($this->conn, $checkEmailQuery);
      return mysqli_num_rows($runCheckEmailQuery) > 0;
    }

    public function getUser($userId): array {
      $getUserQuery = "SELECT * FROM `users` WHERE id = {$userId}";
      $runGetUserQuery = mysqli_query($this->conn, $getUserQuery);
      if($runGetUserQuery) {
        return  mysqli_fetch_assoc($runGetUserQuery);
      }
    }


    //start setter

    public function setFullName($fullName) {
         $this->updateField('FullName', $fullName);
     }

     public function setEmail($email) {
         $this->updateField('Email', $email);
     }

     public function setPasswordHash($passwordHash) {
         $this->updateField('PasswordHash', $passwordHash);
     }

     public function setGender($gender) {
         $this->updateField('Gender', $gender);
     }

     public function setProfilePhotoURL($profilePhotoURL) {
         $this->updateField('ProfilePhotoURL', $profilePhotoURL);
     }

     public function setCity($city) {
         $this->updateField('City', $city);
     }

     public function setPhoneNumber($phoneNumber) {
         $this->updateField('PhoneNumber', $phoneNumber);
     }

     public function setPrivacySettings($privacySettings) {
         $this->updateField('PrivacySettings', $privacySettings);
     }

     public function setAccountStatus($accountStatus) {
         $this->updateField('AccountStatus', $accountStatus);
     }

     public function setLastLogin($lastLogin) {
         $this->updateField('LastLogin', $lastLogin);
     }

     public function setOnlineStatus($onlineStatus) {
         $this->updateField('OnlineStatus', $onlineStatus);
     }

     public function setFollowerCount($followerCount) {
         $this->updateField('FollowerCount', $followerCount);
     }

     public function setFollowingCount($followingCount) {
         $this->updateField('FollowingCount', $followingCount);
     }

     public function setVerificationStatus($verificationStatus) {
         $this->updateField('VerificationStatus', $verificationStatus);
     }

     public function setNotificationSettings($notificationSettings) {
         $this->updateField('NotificationSettings', $notificationSettings);
     }

     public function setBlockedUsers($blockedUsers) {
         $this->updateField('BlockedUsers', $blockedUsers);
     }

     public function setCreatedAt($createdAt) {
         $this->updateField('CreatedAt', $createdAt);
     }

     public function setUpdatedAt($updatedAt) {
         $this->updateField('UpdatedAt', $updatedAt);
     }

     public function setBiography($biography) {
         $this->updateField('Biography', $biography);
     }

    //end setter

    public function updateField($fieldName, $fieldValue): bool {
        $updateQuery = "UPDATE users SET {$fieldName} = '{$fieldValue}' WHERE id = '{$_SESSION["id"]}'";
        $runUpdateQuery = mysqli_query($this->conn, $updateQuery);
        if(!$runUpdateQuery) {
            echo "MySQL Error: " . mysqli_error($this->conn);
            return false;
        }
        return true;
    }
}
