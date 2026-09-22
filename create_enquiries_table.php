<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "brewdb";

// Create enquiries table
$sql = "CREATE TABLE IF NOT EXISTS enquiries (
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


if ($conn->query($sql) === TRUE) { 
  echo "Table 'enquiries' created successfully.";
} else {
  // Check if $conn is set before trying to access its properties
  if (isset($conn)) {
    echo "Error creating table: " . $conn->error;
  } else {
    echo "Error creating table: Database connection not available.";
  }
}


?>
