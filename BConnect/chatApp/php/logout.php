<?php
session_start(); // Démarrer la session en premier

include_once("login.php");
$statusOffline = "Offline";
$logoutQuery = "UPDATE `users` SET status = '{$statusOffline}' WHERE id = '{$_SESSION["id"]}'";
$runLogoutQuery = mysqli_query($conn, $logoutQuery);

if($runLogoutQuery){
    session_unset(); // Vider toutes les variables de session
    session_destroy(); // Détruire la session
    header("location: ../login.php");
}
