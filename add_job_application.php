<?php
$conn = mysqli_connect("localhost", "root", "", "brewdb");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get basic text input
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $street_address = $_POST['street_address'];
    $city_town = $_POST['city_town'];
    $state = $_POST['state'];
    $postcode = $_POST['postcode'];
    $phone_number = $_POST['phone_number'];

    // File upload
    $cv = $_FILES['cv_upload']['name'];
    $photo = $_FILES['photo_upload']['name'];

    // Create uploads directory if not exists
    if (!is_dir("uploads")) {
        mkdir("uploads", 0777, true);
    }

    // Move uploaded files to "uploads/" folder
    move_uploaded_file($_FILES['cv_upload']['tmp_name'], "uploads/" . $cv);
    move_uploaded_file($_FILES['photo_upload']['tmp_name'], "uploads/" . $photo);

    // Insert data into database
    $stmt = $conn->prepare("INSERT INTO joinus 
        (first_name, last_name, email, street_address, city_town, state, postcode, phone_number, cv_upload, photo_upload)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt->bind_param("ssssssssss", 
        $first_name, $last_name, $email, $street_address, $city_town,
        $state, $postcode, $phone_number, $cv, $photo
    );

    $stmt->execute();
    $stmt->close();
    $conn->close();

    // Redirect back to job applications page
    header("Location: admin_view.php?page=jobs");
    exit();
}
?>
