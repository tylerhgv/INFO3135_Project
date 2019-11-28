<?php
// script to handle header action
if(isset($_GET['action']) && $_GET['action'] != ""){
    $action = $_GET['action'];
    if(isset($action) && $action != ""){
        switch($action){
            case "signin":
                header('location: signinpage.php');
                break;
            case "signup":
                header('location: signuppage.php');
                break;
            case "home":
            default:
                header('location: ../welcome.php');
                exit();
        }
    }
} else {
  header('location: ../welcome.php');
  exit();
}
?>