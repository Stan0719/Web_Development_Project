========== update_user.php ==========
<?php
$conn = mysqli_connect("localhost", "root", "", "brewdb");

if (isset($_POST['id'], $_POST['username'], $_POST['password'])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("UPDATE admin_users SET username=?, password=? WHERE id=?");
    $stmt->bind_param("ssi", $username, $password, $id);
    $stmt->execute();

    header("Location: admin_view.php?page=users");
    exit();
}
?>