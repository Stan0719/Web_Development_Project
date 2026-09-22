<!-- // Stanton Qi Jin CHOO (104391591) enquiry.php , enquiry_process , enquiryconfirm.php , index.php , navigation.php . footer.php , search_feature.php -->v
<?php
session_start(); 

require 'db_connect.php';

// Sanitize inputs
$fname = $conn->real_escape_string($_POST['fname']);
$lname = $conn->real_escape_string($_POST['lname']);
$email = $conn->real_escape_string($_POST['email']);
$street = $conn->real_escape_string($_POST['street_address']);
$city = $conn->real_escape_string($_POST['city_town']);
$state = $conn->real_escape_string($_POST['state']);
$postcode = $conn->real_escape_string($_POST['postcode']);
$phone = $conn->real_escape_string($_POST['phone']);
$enquiry_type = $conn->real_escape_string($_POST['enquiry_type']);
$message = $conn->real_escape_string($_POST['message']);

// photo upload if user wanna upload photo
$photoName = "";
if (isset($_FILES['user_photo']) && $_FILES['user_photo']['error'] === UPLOAD_ERR_OK) {
    $photoName = basename($_FILES['user_photo']['name']);
    $uploadDir = 'uploads/';
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }
    move_uploaded_file($_FILES['user_photo']['tmp_name'], $uploadDir . $photoName);
}

// Store in session
$_SESSION['enquiry'] = [
    'fname' => $fname,
    'lname' => $lname,
    'email' => $email,
    'street_address' => $street,
    'city_town' => $city,
    'state' => $state,
    'postcode' => $postcode,
    'phone' => $phone,
    'enquiry_type' => $enquiry_type,
    'message' => $message,
    'photoName' => $photoName
];

// Insert into DB
$sql = "INSERT INTO enquiries 
(fname, lname, email, street_address, city_town, state, postcode, phone, enquiry_type, message, user_photo)
VALUES 
('$fname', '$lname', '$email', '$street', '$city', '$state', '$postcode', '$phone', '$enquiry_type', '$message', '$photoName')";

if ($conn->query($sql) === TRUE) {
    header("Location: enquiryconfirm.php");
    exit;
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
