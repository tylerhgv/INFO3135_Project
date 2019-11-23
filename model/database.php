<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'dogAppUser');
define('DB_PASSWORD', '123456');
define('DB_NAME', 'dogAppDB');

    try {
        $db = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USERNAME, DB_PASSWORD);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("ERROR: Could not connect. " . $e->getMessage());
    }
?>

<!--
This is the SQL command to create the user table

CREATE TABLE users (
userId int(10) AUTO_INCREMENT PRIMARY KEY NOT NULL,
userName varchar(15) NOT NULL,
userPass varchar(255) NOT NULL
);

-->
