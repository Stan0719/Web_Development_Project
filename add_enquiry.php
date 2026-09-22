<?php
$conn = mysqli_connect("localhost", "root", "", "brewdb");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $street_address = $_POST['street_address'];
    $city_town = $_POST['city_town'];
    $state = $_POST['state'];
    $postcode = $_POST['postcode'];
    $phone = $_POST['phone'];
    $enquiry_type = $_POST['enquiry_type'];
    $message = $_POST['message'];

    // Handle photo
    $user_photo = "";
    if (isset($_FILES['user_photo']) && $_FILES['user_photo']['error'] == 0) {
        $target_dir = "uploads/";
        $file_name = basename($_FILES["user_photo"]["name"]);
        $target_file = $target_dir . time() . "_" . $file_name;

        if (move_uploaded_file($_FILES["user_photo"]["tmp_name"], $target_file)) {
            $user_photo = basename($target_file); // Save just the file name
        }
    }

    $stmt = $conn->prepare("INSERT INTO enquiries 
        (fname, lname, email, street_address, city_town, state, postcode, phone, enquiry_type, message, user_photo) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        
    $stmt->bind_param("sssssssssss", 
        $fname, $lname, $email, $street_address, $city_town, $state, $postcode, $phone, $enquiry_type, $message, $user_photo);
    
    $stmt->execute();
    $stmt->close();
    $conn->close();

    header("Location: admin_view.php?page=enquiries");
    exit();
}
?>
