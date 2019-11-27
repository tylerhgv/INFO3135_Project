<?php
require('../model/database.php');
require('../model/user_db.php');
require('../model/dog_db.php');

$stage = filter_input(INPUT_POST, 'stage');

if($stage == 1){
    $user_id = filter_input(INPUT_POST, 'user_id');
    $first_name = filter_input(INPUT_POST, 'first_name');
    $last_name = filter_input(INPUT_POST, 'last_name');
    $email = filter_input(INPUT_POST, 'email');
    $dob_month = filter_input(INPUT_POST, 'dob_month');
    $dob_day = filter_input(INPUT_POST, 'dob_day');
    $dob_year = filter_input(INPUT_POST, 'dob_year');

    if ($first_name == NULL || $last_name == NULL || $email == NULL || $dob_month == NULL || $dob_day == NULL || $dob_year == NULL) {
        header('location: registrationpage.php?stage=1&message=emptyfields');
        exit();
    }

    $dob = $dob_year . "-" . $dob_month . "-" . $dob_day;
    updateUserDetails($user_id, $first_name, $last_name, $email, $dob);
    header('location: registrationpage.php?stage=2');
}else if($stage == 2){
    $user_id = filter_input(INPUT_POST, 'user_id');
    $profile_pic = $_FILES['profile_pic']['name'];
    $biography = filter_input(INPUT_POST, 'biography');
    $location_country = filter_input(INPUT_POST, 'country');
    $location_province = filter_input(INPUT_POST, 'province');
    $location_city = filter_input(INPUT_POST, 'city');

    $profile_pic = $user_id . "_" . preg_replace ("/\s+/ ", "_", $profile_pic);
    $profilePicStorage = "profilePictures/".basename($profile_pic);
    $location = $location_city . ", " . $location_province . ", " . $location_country;

    updateUserProfile($user_id, $profile_pic, $biography, $location);
    if (move_uploaded_file($_FILES['profile_pic']['tmp_name'], $profilePicStorage)) {
        header('location: registrationpage.php?stage=3');
    } else {
        header('location: registrationpage.php?stage=2&message=cannotsavefile');
    }
}else if($stage == 3){
    $user_id = filter_input(INPUT_POST, 'user_id');
    $dog_name = filter_input(INPUT_POST, 'dog_name');
    $dog_breed = filter_input(INPUT_POST, 'dog_breed');
    $dog_gender = $_POST['dog_gender'];
    $dog_dob_month = filter_input(INPUT_POST, 'dog_dob_month');
    $dog_dob_day = filter_input(INPUT_POST, 'dog_dob_day');
    $dog_dob_year = filter_input(INPUT_POST, 'dog_dob_year');
    $dog_adopt_month = filter_input(INPUT_POST, 'dog_adopt_month');
    $dog_adopt_day = filter_input(INPUT_POST, 'dog_adopt_day');
    $dog_adopt_year = filter_input(INPUT_POST, 'dog_adopt_year');

    if(empty($user_id) || empty($dog_name) || empty($dog_breed) || empty($dog_gender) || empty($dog_dob_month) || empty($dog_dob_day) || empty($dog_dob_year) || empty($dog_adopt_month) || empty($dog_adopt_day) || empty($dog_adopt_year)){
        header('location: registrationpage.php?stage=3&message=emptyfields');
    }

    $dog_dob = $dog_dob_year . "-" . $dog_dob_month . "-" . $dog_dob_day;
    $dog_adopt_date = $dog_adopt_year . "-" . $dog_adopt_month . "-" . $dog_adopt_day;
    createDog($user_id, $dog_name, $dog_breed, $dog_gender, $dog_dob, $dog_adopt_date);

    $has_profile = true;
    finalizeProfile($user_id, $has_profile);

    session_start();

    $_SESSION['hasProfile'] = true;

    header('location: ../home/index.php');
}
?>