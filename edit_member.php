<?php
$conn = mysqli_connect("localhost", "root", "", "brewdb");
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM membership WHERE id=$id");
$row = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $login_id = $_POST['login_id'];
    $password = $_POST['password'];

    mysqli_query($conn, "UPDATE membership 
                         SET first_name='$first_name', last_name='$last_name', email='$email', 
                             login_id='$login_id', password='$password' 
                         WHERE id=$id");

    header("Location: admin_view.php?page=membership");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Member</title>
  <link rel="stylesheet" href="style.css"> 
</head>
<body class="js-edit-body">
  <form method="POST">
    <h2 class="js-edit-title">Edit Member</h2>

    <input type="text" name="first_name" value="<?= htmlspecialchars($row['first_name']) ?>" maxlength="50" pattern="[A-Za-z ]+" required class="js-edit-input" placeholder="First Name"><br>

    <input type="text" name="last_name" value="<?= htmlspecialchars($row['last_name']) ?>" maxlength="50" pattern="[A-Za-z ]+" required class="js-edit-input" placeholder="Last Name"><br>

    <input type="email" name="email" value="<?= htmlspecialchars($row['email']) ?>" maxlength="100" required class="js-edit-input" placeholder="Email"><br>

    <input type="text" name="login_id" value="<?= htmlspecialchars($row['login_id']) ?>" maxlength="50" pattern="[A-Za-z0-9]+" required class="js-edit-input" placeholder="Login ID"><br>

    <input type="text" name="password" value="<?= htmlspecialchars($row['password']) ?>" maxlength="255" required class="js-edit-input" placeholder="Password"><br>

    <button type="submit" class="js-edit-button">Update</button>
    <a href="admin_view.php?page=membership" class="js-back-button">Back</a>
  </form>
</body>
</html>
`
