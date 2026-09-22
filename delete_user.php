
<?php
$conn = mysqli_connect("localhost", "root", "", "brewdb");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    mysqli_query($conn, "DELETE FROM admin_users WHERE id = $id");
}

header("Location: admin_view.php?page=users");
exit();
?>