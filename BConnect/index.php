<?php
// Include necessary files and classes
require_once('config/Database.php');
require_once('models/userModel/User.php');
require_once('models/userModel/UserInfo.php');
require_once('models/userModel/UserSetting.php');
require_once('controllers/UserController/Authentificator.php');

// Generate a unique identifier for the user
$UID = bin2hex(random_bytes(10));

// Create an Authentificator instance
$user = new Authentificator($UID, $_POST, $_FILES);

// Check if the form was submitted for user signup or login
if (isset($_POST['signup'])) {
    $user->signUp();
} elseif (isset($_POST['signin'])) {
    // Attempt user login
    if ($user->signIn()) {
        // Redirect to the NewsFeed page upon successful login
        header("Location: views/user/NewsFeed.php");
        exit;
    } else {
        echo "Email or password is incorrect.";
    }
}

// Include the home view
require_once('views/user/home.php');
