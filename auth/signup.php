<?php
require('../model/database.php');

$username = filter_input(INPUT_POST, 'username');
$userpass = filter_input(INPUT_POST, 'password');
$userpass_match = filter_input(INPUT_POST, 'password_match');

//if either username or passwords are blank
if ($username == NULL || $userpass == NULL || $userpass_match == NULL) {
    header('location: ../index.php?message=emptyfields');
    exit();
//if username is not formatted correctly
} else if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
    header('location: ../index.php?message=invalidusername');
    exit();
//if the passwords don't match
} else if($userpass !== $userpass_match){
    header('location: ../index.php?message=passwordsdontmatch&username='.$username);
    exit();
}
else {
    //if user already exists
    $previousUser = checkIfUserExists($username);
    if($previousUser > 0){
        header('location: ../index.php?message=useralreadyexists');
        exit();
    }

    //create the user
    $hashed_pass = password_hash($userpass, PASSWORD_DEFAULT);
    addNewUser($username, $hashed_pass);
    header('location: ../index.php?message=createdaccount');
}


function addNewUser($username, $hashed_pass){
    global $db;
    $query = "INSERT INTO user (userName, userPass)
                VALUES (:username, :hashed_pass)";
    $statement = $db->prepare($query);
    $statement->bindValue(':username', $username);
    $statement->bindValue(':hashed_pass', $hashed_pass);
    $statement->execute();
    $statement->closeCursor();
}

function checkIfUserExists($username){
    global $db;
    $query = "SELECT username FROM user
                WHERE userName = :username";
    $statement = $db->prepare($query);
    $statement->bindValue(':username', $username);
    $statement->execute();
    $count = $statement->rowCount();
    $statement->closeCursor();
    return $count;
}
?>

<!--
email verification pseudo code

//create field called verificationKey = numbers
//create field called allowLogin = false;
//send email to user with random key
//when users signs in, prompt for random key
//if random keys match, set allowLogin to true;


//mail($to, $subject, $message, $headers) is used to send emails
-->
