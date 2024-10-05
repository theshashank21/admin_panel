<?php
global $conn;

$servername = "localhost";
$username = "root";
$password = "vertrigo";
$db = "purplefree_admin";

try {
    // Create a new PDO connection
    $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);

    // Set PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // echo "Connection successful";
} catch (PDOException $e) {
    // Catch any connection error
    echo "Database connection failed, contact your developer: " . $e->getMessage();
}
