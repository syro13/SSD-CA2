<?php
    // $dsn = 'mysql:host=localhost;dbname=D00246698';
    // $username = 'D00246698';
    // $password = 'qbAYimpX';
    $dsn = 'mysql:host=localhost;dbname=speedrunning_data';
    $username = 'root';
    $password = '';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>