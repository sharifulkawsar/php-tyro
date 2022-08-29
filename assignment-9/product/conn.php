<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = 'product_db';
$dsn = "mysql:host={$servername};dbname={$database}";

try {
    $conn = new PDO($dsn, $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->exec("set names utf8mb4");
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>