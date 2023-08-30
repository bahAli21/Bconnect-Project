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
  'file-choosed' => '../../assets/images/img/7.jpg',
];


$story = new Story;
// $story->userAddStory($tab, 22);
// $story->setNbStory($story->getNbStory());
// echo $story->getNbStory();

 var_dump($story->getAllStories());
