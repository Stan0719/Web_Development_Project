<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "CREATE DATABASE IF NOT EXISTS brewdb";
if (!mysqli_query($conn, $sql)) {
    die("Error creating database: " . mysqli_error($conn));
}


mysqli_select_db($conn, "brewdb");

$sql_admin_users = "CREATE TABLE IF NOT EXISTS admin_users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
)";
if (!mysqli_query($conn, $sql_admin_users)) {
    die("Error creating admin_users table: " . mysqli_error($conn));
}

// Insert default admin if not exists 
$check_admin_sql = "SELECT id FROM admin_users WHERE LOWER(username) = 'admin'";
$check_admin_result = mysqli_query($conn, $check_admin_sql);

if ($check_admin_result) {
    if (mysqli_num_rows($check_admin_result) == 0) {
        $insert_admin_sql = "INSERT INTO admin_users (username, password) VALUES ('admin', 'admin')";
        if (!mysqli_query($conn, $insert_admin_sql)) {
            // Log error
            error_log("Error inserting default admin user: " . mysqli_error($conn));
        }
    }
} else {
    error_log("Error checking for default admin user: " . mysqli_error($conn));
}

$sql_membership = "CREATE TABLE IF NOT EXISTS membership (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    login_id VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
if (!mysqli_query($conn, $sql_membership)) {
    die("Error creating membership table: " . mysqli_error($conn));
}

$sql_enquiries = "CREATE TABLE IF NOT EXISTS enquiries (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  fname VARCHAR(25) NOT NULL,
  lname VARCHAR(25) NOT NULL,
  email VARCHAR(50) NOT NULL,
  street_address VARCHAR(40) NOT NULL,
  city_town VARCHAR(20) NOT NULL,
  state VARCHAR(30) NOT NULL,
  postcode VARCHAR(5) NOT NULL,
  phone VARCHAR(15) NOT NULL,
  enquiry_type VARCHAR(30) NOT NULL,
  message TEXT NOT NULL,
  user_photo VARCHAR(255),
  submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
if (!mysqli_query($conn, $sql_enquiries)) {
    die("Error creating enquiries table: " . mysqli_error($conn));
}

$sql_joinus = "CREATE TABLE IF NOT EXISTS joinus (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(25),
    last_name VARCHAR(25),
    email VARCHAR(50),
    street_address VARCHAR(40),
    city_town VARCHAR(20),
    state VARCHAR(20),
    postcode VARCHAR(5),
    phone_number VARCHAR(15),
    cv_upload VARCHAR(255),
    photo_upload VARCHAR(255),
    submission_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
if (!mysqli_query($conn, $sql_joinus)) {
    die("Error creating joinus table: " . mysqli_error($conn));
}

?>


