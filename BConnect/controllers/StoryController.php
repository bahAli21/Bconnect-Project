<?php

// class StoryController
// {
//    private $conn;
//
//    public function __construct() {
//        $db = new Database();
//        $this->conn = $db->getConnexion();
//    }
//
//    public  function createStory($post, $file, $userId): bool {
//      if(isset($post['post-story']))
//      {
//        if(empty($post['content-text']) && empty($file['imageOrVideo-post-story'])) {
//          return false;
//        } else {
//          $image = $file['imageOrVideo-post-story'];
//
//          $imageName = $image['name'];
//          $imageSize = $image['size'];
//          $imageTempName = $image['tmp_name'];
//          $imageType = $image['type'];
//
//          // get image extension or type
//          $explode = explode(".", $imageName);
//          $lowercase = strtolower(end($explode));
//
//          // image extension required
//          $extension = ["png","jpg","jpeg","mp4","avi","mov","ogg"];
//
//          // if extension not matched
//          if(!in_array($lowercase,$extension)){
//              echo "This Extension file not allowed,Please choose JPG or PNG.";
//          }else{
//              // random number
//              $random = rand(999999999,111111111);
//              $time = time();
//              // image unique name
//              $uniqueImageName = $random . $time . $imageName;
//
//              // save image
//              move_uploaded_file($imageTempName, "../../assets/images/uploadImg/" . $uniqueImageName);
//              $story = new Story;
//              if($story->userAddStory($post, $userId, $uniqueImageName)) {
//                return true;
//              }
//
//        }
//
//      }
//
//    }
//    return false;
//  }
// }
//
// $storyPosted = new StoryController;
//
// if($storyPosted->createStory($_POST, $_FILES, $_SESSION['id'])) {
//   // Recharge la page actuelle
//   $story = new Story;
//   if(  $story->setNbStory($story->getNbStory())){
//     header("Location: " . $_SERVER['REQUEST_URI']);
//     exit;
//   }
// }
