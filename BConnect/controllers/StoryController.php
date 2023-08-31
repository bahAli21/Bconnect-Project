<?php
require_once('../models/StoryModel.php');
require_once("../config/Database.php");
class StoryController
{
   private $conn;

   public function __construct() {
       $db = new Database();
       $this->conn = $db->getConnexion();
   }
}

$story = new Story;
$tab = [
  'content' => "Bonjour",
  'file-choosed' => '../../assets/images/img/heart.png',
];


$story = new Story;
 $story->userAddStory($tab, 23);
// $story->setNbStory($story->getNbStory());
// echo $story->getNbStory();

 // var_dump($story->getAllStories());
