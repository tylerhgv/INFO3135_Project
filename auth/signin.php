<?php
require('../model/database.php');

$username = filter_input(INPUT_POST, 'username');
$userpass = filter_input(INPUT_POST, 'password');

if ($username == NULL || $userpass == NULL) {
    header('location: ../index.php?message=emptyfields&username='. $username);
    exit();
} else {
    //find the user in the db
    $user = findUser($username, $userpass);

    //if the user varialbe is null, user was not found
    if($user == NULL){
        header('location: ../index.php?message=usernotfound');
        exit();
    }else {
        $hashed_userpass = $user["userPass"];

        //check if the password matches the hashed password from the db
        if(!$passwordCheck = checkPasswords($userpass, $hashed_userpass)){
            //if they don't match
            header('location: ../index.php?message=incorrectpassword');
            exit();
        }else if($passwordCheck == true){
            //if they match

            //start a session
            session_start();
            $_SESSION['signedin'] = true;
            $_SESSION['username'] = $user['userName'];
            $_SESSION['userid'] = $user['userId'];

            header('location: ../home/index.php');
        }else {
            //if anything else happens
            header('location: ../index.php?message=incorrectpassword');
            exit();
        }
    }
}

function findUser($username, $userpass){
    global $db;
    $query = "SELECT userId, userName, userPass FROM user
                WHERE userName = :username";
    if($statement = $db->prepare($query)){
        $statement->bindValue(':username', $username);
        if($statement->execute()){
            if($user = $statement->fetch()){
                $statement->closeCursor();
                return $user;
            }
        }
    }
    return NULL;

}

function checkPasswords($unhashed_pass, $hashed_pass){
    if(password_verify($unhashed_pass, $hashed_pass)){
        return true;
    }else {
        return false;
    }
}
?>
