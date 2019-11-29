<?php
session_start();

//Check if the user is signed in
if(empty($_SESSION['signedin']) || $_SESSION['signedin'] != true){
    header('location: ../index.php');
    exit();
}

// script to handle header action
if(isset($_GET['action']) && $_GET['action'] != ""){
    $action = $_GET['action'];
    if(isset($action) && $action != ""){
        switch($action){
            case "profile":
                header('location: profile/index.php');
                break;
            case "group":
                header('location: group/index.php');
                break;
            case "event":
                header('location: event/index.php');
                break;
            case "signout":
                header('location: ../auth/signout.php');
                break;
            case "home":
            default:
                header('location: home.php');
                exit();
        }
    }
} else {
  header('location: home.php');
  exit();
}
?>
