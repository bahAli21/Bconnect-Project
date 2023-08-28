<?php
// Database.php

interface DatabaseInterface {
    public function getConnexion(): mysqli;
}

class Database implements DatabaseInterface {
    private $config;

    public function __construct() {
        $this->config = require 'config.php';
    }

    public function getConnexion(): mysqli {
        $conn = new mysqli(
            $this->config['host'],
            $this->config['user'],
            $this->config['password'],
            $this->config['dbname']
        );

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        return $conn;
    }
}
?>
