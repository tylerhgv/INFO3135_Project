<?php
session_start();
if (!isset($_SESSION['owd'])) {
  $_SESSION['owd'] = str_replace("index.php","","http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
  $_SESSION['css'] = $_SESSION['owd'] . "main.css";
}
// If the user is already signed in, send them to the home page
if(isset($_SESSION['signedin']) && $_SESSION['signedin'] === true){
      header('location: ../home/index.php');
      exit();
}

// script to handle header action
if(isset($_GET['action']) && $_GET['action'] != ""){
    $action = $_GET['action'];
    if(isset($action) && $action != ""){
        switch($action){
            case "signin":
                header('location: auth/signinpage.php');
                break;
            case "signup":
                header('location: auth/signuppage.php');
                break;
            case "home":
            default:
                header('location: welcome.php');
                exit();
        }
    }
} else {
  header('location: welcome.php');
  exit();
}
?>
