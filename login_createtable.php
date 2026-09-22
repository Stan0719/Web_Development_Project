<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "brewdb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create table
$sql = "CREATE TABLE IF NOT EXISTS admin_users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
)";
mysqli_query($conn, $sql);

// Insert default admin if not exists (case-insensitive)
$check = mysqli_query($conn, "SELECT * FROM admin_users WHERE LOWER(username) = 'admin'");
if (mysqli_num_rows($check) == 0) { 
    mysqli_query($conn, "INSERT INTO admin_users (username, password) VALUES ('admin', 'admin')");
}

mysqli_close($conn);
?>
