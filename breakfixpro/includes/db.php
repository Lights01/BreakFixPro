<?php
$host = 'localhost';
$dbname = 'breakfixpro_db';
$username = 'root';
$password = ''; // Default password for XAMPP

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Database connection established.";
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?> 
