<?php
$conn = mysqli_connect("localhost", "root", "", "brewdb");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $result = mysqli_query($conn, "SELECT cv_upload, photo_upload FROM joinus WHERE id = $id");
    if ($row = mysqli_fetch_assoc($result)) {
        if (!empty($row['cv_upload'])) unlink("uploads/" . $row['cv_upload']);
        if (!empty($row['photo_upload'])) unlink("uploads/" . $row['photo_upload']);
    }

    // Delete from DB
    mysqli_query($conn, "DELETE FROM joinus WHERE id = $id");
}

header("Location: admin_view.php?page=jobs");
exit();
?>
