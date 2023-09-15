<?php
 require_once("UserSetting.php");
 class UserInfo extends UserSetting {

   private  $conn;
   public function __construct() {
     $this->conn = (new Database)->getConnexion();
   }

   public function setLocation($location){
     $this->updateField('usersinfo', 'location', $location);
   }

   public function setProfilePicture($profilePicture) {
     $this->updateField('usersinfo', 'profilePicture', $profilePicture);
   }
     public function setPhone($phone){
     $this->updateField('usersinfo', 'phoneNumber', $phone);
   }

   /**
 * Insert user information into the 'usersinfo' table.
 *
 * @param string $UniqID The unique identifier of the user.
 * @param string $profilePicture The URL or path to the user's profile picture.
 *
 * @return bool Returns true if the insertion was successful, false otherwise.
 */
  public function insertUserInfos($UniqID, $profilePicture): bool {
      $sql = "INSERT INTO `usersinfo` (userId, profilePicture) VALUES (?, ?)";
      $statement = $this->conn->prepare($sql);
      $statement->execute([$UniqID, $profilePicture]);
      if (!$statement) {
          return false;
      }
      return true;
  }

}
