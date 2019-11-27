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