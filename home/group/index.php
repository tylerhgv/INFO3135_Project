<?php
require('../../model/database.php');
require('../../model/group_db.php');
session_start();

//Check if the user is signed in
if(empty($_SESSION['signedin']) || $_SESSION['signedin'] != true){
    header('location: ../../index.php');
    exit();
}

// script to handle header & other action
if(isset($_GET['action']) && $_GET['action'] != ""){
    $action = $_GET['action'];
    if(isset($action) && $action != ""){
        switch($action){
            case "create_group":
                $userID = filter_input(INPUT_POST, 'user_id');
                $groupName = filter_input(INPUT_POST, 'group_name');
                $groupDesc = filter_input(INPUT_POST, 'group_desc');
                $profilePic = $_FILES['group_profile']['name'];

                $profilePic = $userID . "_" . preg_replace ("/\s+/ ", "_", $profilePic);
                $storage = "profilePics/".basename($profilePic);

                add_group($groupName,$groupDesc,$profilePic,$userID);
                copy($_FILES['group_profile']['tmp_name'], $storage);

                header('location: group_list.php');
                break;
            case "home":
                header('location: ../index.php');
                break;
            case "profile":
                header('location: ../profile/index.php');
                break;
            case "event":
                header('location: ../event/index.php');
                break;
            case "signout":
                header('location: ../../auth/signout.php');
                break;
            case "group":
            default:
                header('location: group_list.php');
                exit();
        }
    }
} else {
  header('location: group_list.php');
  exit();
}
?>
