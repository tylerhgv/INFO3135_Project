<?php
require('../../model/database.php');
require('../../model/dog_db.php');

if($_GET['action'] === 'edit'){
    $dog_id = filter_input(INPUT_POST, 'dog_id');
    $dog_name = filter_input(INPUT_POST, 'dog_name');
    $dog_breed = filter_input(INPUT_POST, 'dog_breed');
    $dog_gender = $_POST['dog_gender'];
    $dog_dob_month = filter_input(INPUT_POST, 'dog_dob_month');
    $dog_dob_day = filter_input(INPUT_POST, 'dog_dob_day');
    $dog_dob_year = filter_input(INPUT_POST, 'dog_dob_year');
    $dog_adopt_month = filter_input(INPUT_POST, 'dog_adopt_month');
    $dog_adopt_day = filter_input(INPUT_POST, 'dog_adopt_day');
    $dog_adopt_year = filter_input(INPUT_POST, 'dog_adopt_year');

    if(empty($dog_id) || empty($dog_name) || empty($dog_breed) || empty($dog_gender) || empty($dog_dob_month) || empty($dog_dob_day) || empty($dog_dob_year) || empty($dog_adopt_month) || empty($dog_adopt_day) || empty($dog_adopt_year)){
        header('location: dog_edit.php?message=emptyfields');
        exit();
    }

    $dog_dob = $dog_dob_year . "-" . $dog_dob_month . "-" . $dog_dob_day;
    $dog_adopt_date = $dog_adopt_year . "-" . $dog_adopt_month . "-" . $dog_adopt_day;
    updateDog($dog_id, $dog_name, $dog_breed, $dog_gender, $dog_dob, $dog_adopt_date);

    header('location: index.php');
}else if($_GET['action'] === 'delete'){
    $dog_id = filter_input(INPUT_POST, 'dog_id');

    deleteDog($dog_id);

    header('location: index.php');
}else if ($_GET['action'] === 'add'){
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
        header('location: dog_add.php?message=emptyfields');
        exit();
    }

    $dog_dob = $dog_dob_year . "-" . $dog_dob_month . "-" . $dog_dob_day;
    $dog_adopt_date = $dog_adopt_year . "-" . $dog_adopt_month . "-" . $dog_adopt_day;
    createDog($user_id, $dog_name, $dog_breed, $dog_gender, $dog_dob, $dog_adopt_date);

    header('location: index.php');
}
?>