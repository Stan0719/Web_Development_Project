<?php
session_start();

// Check admin session
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit();
}

$conn = mysqli_connect("localhost", "root", "", "brewdb");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Sanitize input as integer

    // Delete member record from database
    mysqli_query($conn, "DELETE FROM membership WHERE id = $id");
}

header("Location: admin_view.php?page=membership");
exit();
?>
