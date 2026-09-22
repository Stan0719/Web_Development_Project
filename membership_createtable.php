<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "brewdb";

// Connect to MySQL server
$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
    die(); // Fail silently
}

// Create database if it doesn't exist
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
mysqli_query($conn, $sql); // No success/error output

// Select the database
mysqli_select_db($conn, $dbname); // No error handling

// SQL to create table
$sql_create = "CREATE TABLE IF NOT EXISTS membership (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    login_id VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";


// Execute silently
mysqli_query($conn, $sql);

// Close connection
mysqli_close($conn);
?>
