<?php
$conn = mysqli_connect("localhost", "root", "", "brewdb");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = $_POST['first_name'];
    $last_name  = $_POST['last_name'];
    $email      = $_POST['email'];
    $login_id   = $_POST['login_id'];
    $password   = $_POST['password']; // Consider hashing

    // Check if login_id already exists
    $check = $conn->prepare("SELECT id FROM membership WHERE login_id = ?");
    $check->bind_param("s", $login_id);
    $check->execute();
    $check->store_result();

    if ($check->num_rows > 0) {
        // Login ID already exists
        echo "<script>alert('Login ID already exists. Please choose a different one.'); 
              window.location.href = 'admin_view.php?page=add_member';</script>";
        $check->close();
        exit();
    }

    $check->close();

    // Proceed to insert
    $stmt = $conn->prepare("INSERT INTO membership (first_name, last_name, email, login_id, password) 
                            VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $first_name, $last_name, $email, $login_id, $password);
    $stmt->execute();

    $stmt->close();
    $conn->close();

    header("Location: admin_view.php?page=membership");
    exit();
}
?>
