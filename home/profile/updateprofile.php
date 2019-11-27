<?php
require('../../model/database.php');
require('../../model/user_db.php');

session_start();

$user_id = filter_input(INPUT_POST, 'user_id');
$first_name = filter_input(INPUT_POST, 'first_name');
$last_name = filter_input(INPUT_POST, 'last_name');
$email = filter_input(INPUT_POST, 'email');
$dob_month = filter_input(INPUT_POST, 'dob_month');
$dob_day = filter_input(INPUT_POST, 'dob_day');
$dob_year = filter_input(INPUT_POST, 'dob_year');
$profile_pic = $_FILES['profile_pic']['name'];
$biography = filter_input(INPUT_POST, 'biography');
$location_country = filter_input(INPUT_POST, 'country');
$location_province = filter_input(INPUT_POST, 'province');
$location_city = filter_input(INPUT_POST, 'city');

if (empty($user_id) || empty($first_name) || empty($last_name) || 
    empty($email) || empty($dob_month) || empty($dob_day) ||
    empty($dob_year) || empty($biography) || empty($location_country) || 
    empty($location_province) || empty($location_city) ){
    header('location: profile_edit.php?message=emptyfields');
    exit();
}


$dob = $dob_year . "-" . $dob_month . "-" . $dob_day;
updateUserDetails($user_id, $first_name, $last_name, $email, $dob);

if(empty($profile_pic)){
    $profile_pic = $_SESSION['profile_pic'];
}else {
    $profile_pic = $user_id . "_" . preg_replace ("/\s+/ ", "_", $profile_pic);
}
$profilePicStorage = "profilePics/".basename($profile_pic);
$location = $location_city . ", " . $location_province . ", " . $location_country;

updateUserProfile($user_id, $profile_pic, $biography, $location);

if(empty($_FILES['profile_pic']['name'])){
    header('location: index.php');
}else {
    if(move_uploaded_file($_FILES['profile_pic']['tmp_name'], $profilePicStorage)) {
        header('location: index.php');
    } else {
        header('location: profile_edit.php?message=cannotsavefile');
    }
}


?>