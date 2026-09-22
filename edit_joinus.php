<?php
$conn = mysqli_connect("localhost", "root", "", "brewdb");

// Fetch existing data
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM joinus WHERE id = $id");
    $data = mysqli_fetch_assoc($result);
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $street_address = $_POST['street_address'];
    $city_town = $_POST['city_town'];
    $state = $_POST['state'];
    $postcode = $_POST['postcode'];
    $phone_number = $_POST['phone_number'];

    $stmt = $conn->prepare("UPDATE joinus SET 
        first_name = ?, last_name = ?, email = ?, street_address = ?, 
        city_town = ?, state = ?, postcode = ?, phone_number = ?
        WHERE id = ?");
    
    $stmt->bind_param("ssssssssi", $first_name, $last_name, $email, $street_address,
                                   $city_town, $state, $postcode, $phone_number, $id);
    $stmt->execute();
    $stmt->close();
    $conn->close();

    header("Location: admin_view.php?page=jobs");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit Job Application</title>
  <link rel="stylesheet" href="style.css">
</head>
<body class="js-edit-body">
    <!-- Edit Form -->
    <form method="POST" action="" class="js-edit-form">
        <h2 class="js-edit-title">Edit Job Application</h2>
        <input type="hidden" name="id" value="<?= $data['id'] ?>">

        <label>First Name:
            <input type="text" name="first_name" class="js-edit-input" value="<?= $data['first_name'] ?>" maxlength="25" pattern="[A-Za-z ]+" required>
        </label><br><br>

        <label>Last Name:
            <input type="text" name="last_name" class="js-edit-input" value="<?= $data['last_name'] ?>" maxlength="25" pattern="[A-Za-z ]+" required>
        </label><br><br>

        <label>Email:
            <input type="email" name="email" class="js-edit-input" value="<?= $data['email'] ?>" placeholder="name@domain.com" required>
        </label><br><br>

        <label>Street Address:
            <input type="text" name="street_address" class="js-edit-input" value="<?= $data['street_address'] ?>" maxlength="40" required>
        </label><br><br>

        <label>City:
            <input type="text" name="city_town" class="js-edit-input" value="<?= $data['city_town'] ?>" maxlength="20" required>
        </label><br><br>

        <label>State:
            <select name="state" class="js-edit-input" required>
                <option value="">Select a state</option>
                <?php
                $states = ["Johor", "Kedah", "Kelantan", "Malacca", "Negeri Sembilan", "Pahang", "Penang", "Perak", "Perlis", "Sabah", "Sarawak", "Selangor", "Terengganu", "Kuala Lumpur", "Labuan", "Putrajaya"];
                foreach ($states as $state) {
                    $selected = ($data['state'] === $state) ? 'selected' : '';
                    echo "<option value=\"$state\" $selected>$state</option>";
                }
                ?>
            </select>
        </label><br><br>

        <label>Postcode:
            <input type="text" name="postcode" class="js-edit-input" value="<?= $data['postcode'] ?>" pattern="\d{5}" maxlength="5" placeholder="e.g. 93000" required>
        </label><br><br>

        <label>Phone:
            <input type="tel" name="phone_number" class="js-edit-input" value="<?= $data['phone_number'] ?>" maxlength="10" placeholder="(##) ####-####" required>
        </label><br><br>

        <button type="submit" class="js-edit-button">Update Job Application</button>

        <a href="admin_view.php?page=jobs" class="js-back-button">Back</a>

    </form>
</body>
</html>
