<?php
require('../../model/database.php');
require('../../model/user_db.php');

    session_start();

    //Check if the user is signed in
    if(empty($_SESSION['signedin']) && $_SESSION['signedin'] != true){
        header('location: ../../auth/signinpage.php?redirect=../../home/profile');
        exit();
    }

    //get the user's profile data
    $user_profile = getUserProfile($_SESSION['userId']);

    if(empty($user_profile)){
        header('location: ../../views/error.php?message=profilenotfound');
    }else {
        //set the data to session variables
        $_SESSION['profile_fName'] = $user_profile['fName'];
        $_SESSION['profile_lName'] = $user_profile['lName'];
        $_SESSION['profile_dob'] = $user_profile['dob'];
        $_SESSION['profile_pic'] = $user_profile['profilePic'];
        $_SESSION['profile_bio'] = $user_profile['bio'];
        $_SESSION['profile_location'] = $user_profile['location'];
        $_SESSION['profile_email'] = $user_profile['email'];

        //Load the profile page
        header('location: profile_view.php');
    }
?>