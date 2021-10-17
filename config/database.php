<?php

    $hostname = "localhost";
    $username = "";
    $password = "";

    try {
        $connection = new PDO("mysql:host=$hostname;dbname=php_crud", $username, $password);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo "Database connection failed: " . $e->getMessage();
    }

?>