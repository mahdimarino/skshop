<?php



try {
    $servername = "localhost";
    $dbname = "dzshop";
    $username = "root";
    $password = "";

    $conn = new PDO(
        "mysql:host=$servername; dbname=dzshop",
        $username,
        $password
    );

    $conn->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
