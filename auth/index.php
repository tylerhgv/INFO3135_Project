<?php
// script to handle header action
if(isset($_GET['action']) && $_GET['action'] != ""){
    $action = $_GET['action'];
    if(isset($action) && $action != ""){
        switch($action){
            case "profile":
                header('location: ../home/profile/index.php');
                break;
            case "group":
                header('location: ../home/group/index.php');
                break;
            case "event":
                header('location: ../home/event/index.php');
                break;
            case "signout":
                header('location: signout.php');
                break;
            case "signin":
                header('location: signinpage.php');
                break;
            case "signup":
                header('location: signuppage.php');
                break;
            case "home":
            default:
                header('location: ../index.php');
                exit();
        }
    }
} else {
  header('location: ../index.php');
  exit();
}
?>
