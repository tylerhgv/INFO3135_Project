<?php
require('../model/database.php');
require('../model/user_db.php');

$username = filter_input(INPUT_POST, 'username');
$userpass = filter_input(INPUT_POST, 'password');
$redirect = filter_input(INPUT_POST, 'redirect');

if ($username == NULL || $userpass == NULL) {
    header('location: signinpage.php?message=emptyfields');
    exit();
} else {
    //find the user in the db
    $user = findUser($username, $userpass);

    //if the user varialbe is null, user was not found
    if($user == NULL){
        header('location: signinpage.php?message=usernotfound');
        exit();
    }else {
        $hashed_userpass = $user["userPass"];

        //check if the password matches the hashed password from the db
        if(!$passwordCheck = checkPasswords($userpass, $hashed_userpass)){
            //if they don't match
            header('location: signinpage.php?message=incorrectpassword&username='. $username);
            exit();
        }else if($passwordCheck == true){
            //if they match

            //start a session
            session_start();
            $_SESSION['signedin'] = true;
            $_SESSION['hasProfile'] = $user['hasProfile'];
            $_SESSION['username'] = $user['userName'];
            $_SESSION['userId'] = $user['userId'];

            //if return is not set, set return to be the home page
            if(!$redirect){
                $redirect = '../home/index.php';
            }else if($_SESSION['hasProfile'] == 0){
                $redirect = 'registrationpage.php?stage=1';
            }
            echo $redirect;
            //Send user to the desired page
            header('location: ' . $redirect);
        }else {
            //if anything else happens
            header('location: signinpage.php?message=incorrectpassword&username='. $username);
            exit();
        }
    }
}
?>
