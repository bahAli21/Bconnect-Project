<?php

class Story
{
    private $conn;
    public function __construct() {
        $this->conn = (new Database)->getConnexion();
    }

    public function addStory($UID, $post = NULL, $text = NULL): bool
    {
        $sql = "INSERT INTO `stories` (id, post, text) 
                        VALUES (:id, :post, :text)";
        $statement = $this->conn->prepare($sql);
        $statement->bindParam(':id', $UID);
        $statement->bindParam(':post', $post);
        $statement->bindParam(':text', $text);
        $statement->execute();
        return (bool) $statement;
    }

    public function getAllStories(): array {
        $sql = "SELECT users.UID, users.firstName, users.lastName, stories.id, stories.post, stories.text, stories.views, stories.likes, stories.date
                FROM `users`
                LEFT JOIN stories ON users.UID = stories.userId";

        $statement = $this->conn->prepare($sql);
        $statement->execute();

        $allStories = array();

        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $userId = $row['UID'];
            if (!isset($allStories[$userId])) {
                $allStories[$userId] = array();
            }

            $story = array(
                'id' => $row['id'],
                'post' => $row['post'],
                'text' => $row['text'],
                'views' => $row['views'],
                'likes' => $row['likes'],
                'date' => $row['date']
            );

            $allStories[$userId][] = $story;
        }

        return $allStories;
    }

}
