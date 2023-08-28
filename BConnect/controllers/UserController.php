<?php

  require_once('../config/Database.php');
  require_once('../models/UserModel.php');

  interface UserControllersInterface
  {
    public function signUp($post, $file) ;
  }

  class UserController implements UserControllersInterface {
    private $conn;

     public function __construct() {
         $db = new Database();
         $this->conn = $db->getConnexion();
     }

    public function signUp($post, $file) {

      if(isset($post['signup'])) {
        if(empty($post['full-name']) || empty($post['email']) || empty($post['password']) || empty($file['profilePicture'])) {
          echo "Veuillez remplire tous les champs du formulaire";
        }else {
          $user = new UserModel();
          $fullName = mysqli_real_escape_string($this->conn, $post["full-name"]);
          $email = mysqli_real_escape_string($this->conn, $post["email"]);
          if($user->emailExist($post['email'])) {
            echo "Cet email existe deja";
          }else {
            if(strlen($post['password']) < 8) {
              echo "votre mot de passe doit avoir au moin 8 caractère";
            }else{
              // store password
              $password = password_hash($post['password'], PASSWORD_DEFAULT);
              // profile image
              $image = $_FILES['profilePicture'];

              $imageName = $image['name'];
              $imageSize = $image['size'];
              $imageTempName = $image['tmp_name'];
              $imageType = $image['type'];

              // get image extension or type
              $explode = explode(".", $imageName);
              $lowercase = strtolower(end($explode));

              // image extension required
              $extension = ["png","jpg","jpeg"];

              // if extension not matched
              if(!in_array($lowercase,$extension)){
                  echo "This Extension file not allowed,Please choose JPG or PNG.";
              }else{
                  // random number
                  $random = rand(999999999,111111111);
                  $time = time();
                  // image unique name
                  $uniqueImageName = $random . $time . $imageName;

                  // save image
                  move_uploaded_file($imageTempName, "../assets/images/uploadImg/" . $uniqueImageName);

                  if($user->createAcount($fullName, $email, $password, $uniqueImageName, date('Y-m-d H:i:s'))) {
                    header("Location: ../views/user/home.php");
                  }else{
                    echo "echec d'enregistrement";
                  }
            }
          }
        }
      }
      }
  }

  public function signIn($post) {
    if(isset($post['signin'])) {
      $user = new UserModel();
      $email = mysqli_real_escape_string($this->conn, $post["email"]);
      $password = $post['password'];
      $LoginData = $user->login($email, $password);
        if(!empty($LoginData)) {
          session_start();
          $userId = $user->login($post['email'], $post['password']);
          $_SESSION['id'] = $userId['ID'];
          $status = 'online';
          $user->setOnlineStatus($status);

          header("Location: ../views/user/NewsFeed.php");
          exit;
        }else {
          header("Location: ../views/user/home.php");
        echo "Email ou mot de passe incorrect";
      }
    }
  }
}


$registration = new UserController();
$registration->signUp($_POST, $_FILES);
$registration->signIn($_POST);
