<?php

// interface StoryInterface
// {
//     public function getStory($userId): array;
//     public function userAddStory($post, $userSession, $img): bool;
//     public function getAllStories(): array;
//     public function setNbStory($nbStory): bool;
//     public function getUser($userId): array ;
//     public function getNbStory();
// }
//
// class Story implements StoryInterface
// {
//     private $conn;
//
//     public function __construct() {
//         $db = new Database;
//         $this->conn = $db->getConnexion();
//     }
//
//       public function getStory($userId): array {
//         $storyQuery = "SELECT userStories FROM `users` WHERE ID = '{$userId}'";
//         $runStoryQuery = mysqli_query($this->conn, $storyQuery);
//
//         if ($runStoryQuery) {
//             $fetchData = mysqli_fetch_assoc($runStoryQuery);
//
//             if ($fetchData && isset($fetchData['userStories'])) {
//                 $userStoriesArray = unserialize($fetchData['userStories']);
//                 return $userStoriesArray;
//             } else {
//                 return []; // Tableau vide si pas de données trouvées
//             }
//         } else {
//             return []; // Tableau vide si la requête échoue
//         }
//     }
//
//       public function getAllStories(): array {
//           $allStoriesQuery = "SELECT userStories FROM `users`";
//           $runAllStoryQuery = mysqli_query($this->conn, $allStoriesQuery);
//
//           $allStories = [];
//
//           while ($fetchData = mysqli_fetch_assoc($runAllStoryQuery)) {
//               if (isset($fetchData['userStories'])) {
//                   $userStoriesArray = unserialize($fetchData['userStories']);
//                   $allStories[] = $userStoriesArray;
//               }
//           }
//
//           return $allStories;
//       }
//
//       public function getUser($userId): array {
//         $getUserQuery = "SELECT * FROM `users` WHERE id = {$userId}";
//         $runGetUserQuery = mysqli_query($this->conn, $getUserQuery);
//         if($runGetUserQuery) {
//           return  mysqli_fetch_assoc($runGetUserQuery);
//         }
//       }
//
//     public function getNbStory() {
//       //Le __DIR__ me renvoie le chemin absolu du répertoire du fichier en cours d'exécution
//       $filename = __DIR__ . '/nbStory.txt';
//       $data = file_get_contents($filename);
//       return $data;
//     }
//
//     public function setNbStory($nbStory): bool {
//       $filename = __DIR__ . '/nbStory.txt';
//       $data = file_put_contents($filename, $nbStory + 1);
//
//       if (!$data) {
//           return false;
//       }
//       return true;
//     }
//
//
//     public function userAddStory($post, $userSession, $img): bool {
//         $userStoriesArray = $this->getStory($userSession);
//         $userData = $this->getUser($userSession);
//
//         $newStoryContent = array(
//             'textContent' => $post['content-text'],
//             'id' => $this->getNbStory(),
//             'likes' => 0,
//             'views' => 0,
//             'author' => $userData['FullName'],
//             'AuthorImgUrl' => $userData['ProfilePhotoURL'],
//             'postContent' => $img
//         );
//         $userStoriesArray[] = $newStoryContent;
//         $userStoriesArraySerialized = serialize($userStoriesArray);
//         $addStoryQuery = "UPDATE `users` SET userStories = '{$userStoriesArraySerialized}' WHERE ID = '{$userSession}'";
//         $runAddStoryQuery = mysqli_query($this->conn, $addStoryQuery);
//
//         return $runAddStoryQuery;
//     }
// }
