<?php
require_once 'Authentificator.php';
require_once '../../models/userModel/User.php';
class storyController extends User
{
    private $conn;
    private $post;
    private $file;
    public function __construct($post, $file) {
        $this->conn = (new Database)->getConnexion();
        $this->post = $post;
        $this->file = $file;
    }

    public function createStory(): bool {
            if(isset($this->file['postContent']) || isset($this->post['textContent'])) {
                $fileFormated = new Authentificator($this->getUIDConnected(), $this->file['postContent'], $this->post['textContent']);
                $fileFormated->formateFileChoosed();
                if($fileFormated) {
                    $story = new Story();
                    if($story->addStory($this->getUIDConnected(), $this->file['postContent'], $this->post['textContent']))
                        return true;
                    return false;
                }
                return false;
            }
        return false;
    }
}

