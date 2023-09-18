<?php

namespace storyModel;

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

    public function  getStoryByUser(): array {
        $sql = "SELECT users.firstName, users.lastName, stories.*
                    FROM `users` 
                    INNER JOIN stories 
                    ON users.UID = stories.userId";
        $statement = $this-conn->prepare($sql);
        $statement->execute();
        
    }

    public function  getAllStories(): array {

    }
}
