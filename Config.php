<?php
    define('USER', '19257');
    define('PASSWORD', 'jwitqj');
    define('HOST', 'web.edu');
    define('DATABASE', '19257_polka');
    try {
        $connection = new PDO("mysql:host=".HOST.";dbname=".DATABASE, USER, PASSWORD);
    } catch (PDOException $e) {
        exit("Error: " . $e->getMessage());
    }
?>
