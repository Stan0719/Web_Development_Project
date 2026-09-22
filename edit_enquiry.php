<?php
$conn = mysqli_connect("localhost", "root", "", "brewdb");
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM enquiries WHERE id=$id");
$row = mysqli_fetch_assoc($result);

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

    // Handle photo upload 
    $user_photo = $row['user_photo'];
    if (isset($_FILES['user_photo']) && $_FILES['user_photo']['error'] == 0) {
        $target_dir = "uploads/";
        $file_name = basename($_FILES["user_photo"]["name"]);
        $target_file = $target_dir . time() . "_" . $file_name;

        if (move_uploaded_file($_FILES["user_photo"]["tmp_name"], $target_file)) {
            $user_photo = basename($target_file); // Save just the file name
        }
    }

    // Update database
    $stmt = $conn->prepare("UPDATE enquiries SET fname=?, lname=?, email=?, street_address=?, city_town=?, state=?, postcode=?, phone=?, enquiry_type=?, message=?, user_photo=? WHERE id=?");
    $stmt->bind_param("sssssssssssi", 
        $fname, $lname, $email, $street_address, $city_town, $state, $postcode, $phone, $enquiry_type, $message, $user_photo, $id);
    $stmt->execute();
    $stmt->close();

    header("Location: admin_view.php?page=enquiries");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Enquiry</title>
  <link rel="stylesheet" href="style.css">
</head>
<body class="js-edit-body">
  <form method="POST" enctype="multipart/form-data">
    <h2 class="js-edit-title">Edit Enquiry</h2>

    <input type="text" name="fname" value="<?= $row['fname'] ?>" maxlength="25" pattern="[A-Za-z ]+" required class="js-edit-input" placeholder="First Name"><br>

    <input type="text" name="lname" value="<?= $row['lname'] ?>" maxlength="25" pattern="[A-Za-z ]+" required class="js-edit-input" placeholder="Last Name"><br>

    <input type="email" name="email" value="<?= $row['email'] ?>" required class="js-edit-input" placeholder="name@domain.com"><br>

    <input type="text" name="street_address" value="<?= $row['street_address'] ?>" maxlength="40" required class="js-edit-input" placeholder="Street Address"><br>

    <input type="text" name="city_town" value="<?= $row['city_town'] ?>" maxlength="20" required class="js-edit-input" placeholder="City/Town"><br>

    <select name="state" required class="js-edit-input">
      <option value="">-- Please Select --</option>
      <?php
        $states = ["Johor","Kedah","Kelantan","Malacca","Negeri Sembilan","Pahang","Penang","Perak","Perlis",
                   "Sabah","Sarawak","Selangor","Terengganu","Kuala Lumpur","Labuan","Putrajaya"];
        foreach ($states as $s) {
          $selected = ($row['state'] === $s) ? 'selected' : '';
          echo "<option value=\"$s\" $selected>$s</option>";
        }
      ?>
    </select><br>

    <input type="text" name="postcode" value="<?= $row['postcode'] ?>" pattern="\d{5}" maxlength="5" required class="js-edit-input" placeholder="e.g. 93000"><br>

    <input type="tel" name="phone" value="<?= $row['phone'] ?>" maxlength="10" required class="js-edit-input" placeholder="(##) ####-####"><br>

    <select name="enquiry_type" required class="js-edit-input">
      <option value="">-- Please Select --</option>
      <?php
      $options = ["Membership", "Products", "Pop-up Market Activities", "Order Inquiry", "Feedback", "Other"];
      foreach ($options as $option) {
          $selected = ($row['enquiry_type'] === $option) ? 'selected' : '';
          echo "<option value=\"$option\" $selected>$option</option>";
      }
      ?>
    </select><br>

    <textarea name="message" rows="5" required class="js-edit-input" placeholder="Please provide details about your enquiry..."><?= $row['message'] ?></textarea><br>

    <label>Upload New Photo (optional):</label><br>
    <input type="file" name="user_photo" accept="image/*" class="js-edit-input"><br>
    <?php if (!empty($row['user_photo'])): ?>
      <p>Current Photo: <a href="uploads/<?= $row['user_photo'] ?>" target="_blank">View</a></p>
    <?php endif; ?>

    <button type="submit" class="js-edit-button">Update</button>
    <a href="admin_view.php?page=enquiries" class="js-back-button">Back</a>
  </form>
</body>
</html>
