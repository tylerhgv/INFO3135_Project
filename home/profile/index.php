<?php
require('../../model/database.php');
require('../../model/user_db.php');
require('../../model/dog_db.php');

    session_start();

    //Check if the user is signed in
    if(empty($_SESSION['signedin']) && $_SESSION['signedin'] != true){
        header('location: ../../auth/signinpage.php?redirect=../../home/profile');
        exit();
    }

    //get the user's profile data
    $user_profile = getUserProfile($_SESSION['userId']);
    $user_dogs = getDog($_SESSION['userId']);

        //set the data to session variables
        $_SESSION['profile_fName'] = $user_profile['fName'];
        $_SESSION['profile_lName'] = $user_profile['lName'];
        $_SESSION['profile_dob'] = $user_profile['dob'];
        $_SESSION['profile_pic'] = $user_profile['profilePic'];
        $_SESSION['profile_bio'] = $user_profile['bio'];
        $_SESSION['profile_location'] = $user_profile['location'];
        $_SESSION['profile_email'] = $user_profile['email'];
        $_SESSION['profile_num_of_dogs'] = count($user_dogs);
        $_SESSION['profile_dogs'] = $user_dogs;

    // script to handle header action
    if(isset($_GET['action']) && $_GET['action'] != ""){
        $action = $_GET['action'];
        if(isset($action) && $action != ""){
            switch($action){
                case "home":
                    header('location: ../index.php');
                    break;
                case "group":
                    header('location: ../group/index.php');
                    break;
                case "event":
                    header('location: ../event/index.php');
                    break;
                case "signout":
                    header('location: ../../auth/signout.php');
                    break;
                case "profile":
                default:
                    header('location: profile_view.php');
                    exit();
            }
        }
    } else {
      header('location: profile_view.php');
      exit();
    }
?>
