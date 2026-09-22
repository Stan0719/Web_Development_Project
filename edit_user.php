<?php
$conn = mysqli_connect("localhost", "root", "", "brewdb");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM admin_users WHERE id = $id");
    $user = mysqli_fetch_assoc($result);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit User</title>
  <link rel="stylesheet" href="style.css">
</head>
<body class="js-edit-body">
  <h1 class="js-edit-title">Edit User</h1>
  <form method="POST" action="update_user.php" class="js-edit-form">
    <input type="hidden" name="id" value="<?= $user['id'] ?>">
    <label>Username:
      <input type="text" name="username" class="js-edit-input"
             value="<?= htmlspecialchars($user['username']) ?>"
             required maxlength="50" pattern="[A-Za-z0-9_]+" 
             title="Username can only contain letters, numbers, and underscores.">
    </label>

    <label>Password:
      <input type="text" name="password" class="js-edit-input"
             value="<?= htmlspecialchars($user['password']) ?>"
             required maxlength="255" pattern=".{6,}" 
             title="Password must be at least 6 characters.">
    </label>
    <button type="submit" class="js-edit-button">Update</button>
    <a href="admin_view.php?page=users" class="js-back-button">Back</a>
  </form>
</body>
</html>