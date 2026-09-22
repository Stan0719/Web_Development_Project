<?php
$conn = mysqli_connect("localhost", "root", "", "brewdb");
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM enquiries WHERE id=$id");
header("Location: admin_view.php?page=enquiries");
exit();
