<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "brewdb";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$page = isset($_GET['page']) ? $_GET['page'] : 'home';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="style.css">
</head>
<body class="js-admin-body">
  <div class="js-admin-container">
    <div class="js-admin-sidebar">
      <div class="logo-container">
         <a href="index.php">
          <img src="Images/logob&g.png" alt="Logo">
        </a>
      </div>
      <h2>Admin Dashboard</h2>
      <ul>
        <li><a href="admin_view.php?page=home">Home</a></li>
        <li><a href="admin_view.php?page=users">Admin account</a></li>
        <li><a href="admin_view.php?page=jobs">Job Applications</a></li>
        <li><a href="admin_view.php?page=enquiries">Enquiries</a></li>
        <li><a href="admin_view.php?page=membership">Membership</a></li>
        <li><a href="login.php">Log Out</a></li>
      </ul>
    </div>

    <div class="js-admin-main-content">
      <header><h1>Welcome to the Admin Dashboard</h1></header>
      <section class="js-admin-overview">
        <?php if ($page == 'home'): ?>
          <h2>Quick Overview</h2>
          <div class="js-admin-overview-cards">
            <div class="js-admin-overview-card">
              <h3>Total Admin Users</h3>
              <p>
                <?php
                $count = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS total FROM admin_users"));
                echo $count['total'];
                ?>
              </p>
            </div>
            <div class="js-admin-overview-card">
              <h3>Total Job Applications</h3>
              <p>
                <?php
                $count = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS total FROM joinus"));
                echo $count['total'];
                ?>
              </p>
            </div>
            <div class="js-admin-overview-card">
              <h3>Total Enquiries</h3>
              <p>
                <?php
                $count = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS total FROM enquiries"));
                echo $count['total'];
                ?>
              </p>
            </div>
            <div class="js-admin-overview-card">
              <h3>Total Members</h3>
              <p>
                <?php
                $count = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS total FROM membership"));
                echo $count['total'];
                ?>
              </p>
            </div>
          </div>


        <?php elseif ($page == 'users'): ?>
          <h2>Admin account</h2>
          <a href="admin_view.php?page=add_user" class="js-admin-add-btn">➕ Add New User</a>
          <table class="js-admin-table">
            <tr><th>ID</th><th>Username</th><th>Password</th><th>Actions</th></tr>
            <?php
            $result = mysqli_query($conn, "SELECT * FROM admin_users");
            while ($row = mysqli_fetch_assoc($result)) {
              echo "<tr>
                      <td>{$row['id']}</td>
                      <td>" . htmlspecialchars($row['username']) . "</td>
                      <td>" . htmlspecialchars($row['password']) . "</td>
                      <td class=\'js-action-cell\'>
                        <a href='edit_user.php?id={$row['id']}' class='js-admin-btn js-admin-edit-btn'>Edit</a>
                        <a href='delete_user.php?id={$row['id']}' class='js-admin-btn js-admin-delete-btn' onclick='return confirm(\"Are you sure?\")'>Delete</a>
                      </td>
                    </tr>";
            }
            ?>
          </table>

        <?php elseif ($page == 'add_user'): ?>
          <h2>Add New User</h2>
          <form method="POST" action="add_user.php">
            <label>Username: <input type="text" name="username" required maxlength="10" pattern="[A-Za-z]+" title="Only letters allowed, max 10 characters"></label><br><br>
            <label>Password: <input type="text" name="password" required maxlength="25" pattern="[A-Za-z]+" title="Only letters allowed, max 25 characters"></label><br><br>
            <button type="submit">Add User</button>
          </form>

        <?php elseif ($page == 'jobs'): ?>
          <h2>Job Applications</h2>
          <a href="admin_view.php?page=add_job_application" class="js-admin-add-btn">➕ Add New Job</a>
          <table class="js-admin-table">
            <tr><th>ID</th><th>Username</th><th>Email</th><th>Street Address</th><th>City</th><th>State</th><th>Postcode</th><th>Phone</th><th>cv</th><th>Photo</th><th>Actions</th></tr>
            <?php
            $result = mysqli_query($conn, "SELECT * FROM joinus");
            while ($row = mysqli_fetch_assoc($result)) {
              // Combine first and last name into a display-only username
              $username = htmlspecialchars($row['first_name'] . ' ' . $row['last_name']);
              echo "<tr>
                      <td>{$row['id']}</td>
                      <td>$username</td>
                      <td>" . htmlspecialchars($row['email']) . "</td>
                      <td>" . htmlspecialchars($row['street_address']) . "</td>
                      <td>" . htmlspecialchars($row['city_town']) . "</td>
                      <td>" . htmlspecialchars($row['state']) . "</td>
                      <td>" . htmlspecialchars($row['postcode']) . "</td>
                      <td>" . htmlspecialchars($row['phone_number']) . "</td>
                      <td><a href='uploads/{$row['cv_upload']}' target='_blank'>View CV</a></td>
                      <td><a href='uploads/{$row['photo_upload']}' target='_blank'>View Photo</a></td>
                      <td class=\'js-action-cell\'>
                        <a href='edit_joinus.php?id={$row['id']}' class='js-admin-btn js-admin-edit-btn'>Edit</a>
                        <a href='delete_joinus.php?id={$row['id']}' class='js-admin-btn js-admin-delete-btn' onclick='return confirm(\"Are you sure?\")'>Delete</a>
                      </td>
                    </tr>";
            }
            ?>
          </table>

          <?php elseif ($page == 'add_job_application'): ?>
            <h2>Add New Job Application</h2>
            <form method="POST" action="add_job_application.php" enctype="multipart/form-data">
              <label>First Name:
                <input type="text" name="first_name" placeholder="First Name" maxlength="25" pattern="[A-Za-z ]+" required><br><br>
              </label>
              <label>Last Name:
                <input type="text" name="last_name" placeholder="Last Name" maxlength="25" pattern="[A-Za-z ]+" required><br><br>
              </label>
              <label>Email:
                <input type="email" name="email" placeholder="name@domain.com" required><br><br>
              </label>
              <label>Street Address:
                <input type="text" name="street_address" placeholder="Street Address" maxlength="40" required><br><br>
              </label>
              <label>City:
                <input type="text" name="city_town" placeholder="City/Town" maxlength="20" required><br><br>
              </label>
              <label>State:
                <select name="state" required>
                  <option value="">Select a state</option>
                  <?php
                  $states = ["Johor", "Kedah", "Kelantan", "Malacca", "Negeri Sembilan", "Pahang", "Penang", "Perak", "Perlis", "Sabah", "Sarawak", "Selangor", "Terengganu", "Kuala Lumpur", "Labuan", "Putrajaya"];
                  foreach ($states as $state) {
                    echo "<option value=\"$state\">$state</option>";
                  }
                  ?>
                </select>
              <label>Postcode:
                <input type="text" name="postcode" pattern="\d{5}" maxlength="5" placeholder="e.g. 93000" required><br><br>
              </label>
              <label>Phone:
                <input type="tel" name="phone_number" placeholder="Phone Number" required><br><br>
              </label>
              <label>Upload CV:
                <input type="file" name="cv_upload" required>
              </label><br><br>

              <label>Upload Photo:
                <input type="file" name="photo_upload" required>
              </label><br><br>

              <button type="submit">Submit Application</button>
            </form>


        <?php elseif ($page == 'enquiries'): ?>
          <h2>Enquiries</h2>
          <a href="admin_view.php?page=add_enquiry" class="js-admin-add-btn">➕ Add New Enquiry</a>
          <table class="js-admin-table">
            <tr><th>ID</th><th>Username</th><th>Email</th><th>Street Address</th><th>City</th><th>Postcode</th><th>Phone</th><th>Enquiry Type</th><th>message</th><th>Photo</th><th>Actions</th></tr>
            <?php
            $result = mysqli_query($conn, "SELECT * FROM enquiries");
            while ($row = mysqli_fetch_assoc($result)) {
              $username = htmlspecialchars($row['fname'] . ' ' . $row['lname']);
              echo "<tr>
                      <td>{$row['id']}</td>
                      <td>$username</td>
                      <td>" . htmlspecialchars($row['email']) . "</td>
                      <td>" . htmlspecialchars($row['street_address']) . "</td>
                      <td>" . htmlspecialchars($row['city_town']) . "</td>
                      <td>" . htmlspecialchars($row['postcode']) . "</td>
                      <td>" . htmlspecialchars($row['phone']) . "</td>
                      <td>" . htmlspecialchars($row['enquiry_type']) . "</td>
                      <td>" . htmlspecialchars($row['message']) . "</td>
                      <td><a href='uploads/{$row['user_photo']}' target='_blank'>View Photo</a></td>
                      <td class=\'js-action-cell\'>
                        <a href='edit_enquiry.php?id={$row['id']}' class='js-admin-btn js-admin-edit-btn'>Edit</a>
                        <a href='delete_enquiry.php?id={$row['id']}' class='js-admin-btn js-admin-delete-btn' onclick='return confirm(\"Are you sure?\")'>Delete</a>
                      </td>
                    </tr>";
            }
            ?>
          </table>

          <?php elseif ($page == 'add_enquiry'): ?>
            <h2>Add New Enquiry</h2>
            <form method="POST" action="add_enquiry.php" enctype="multipart/form-data">
              <label>First Name:
                <input type="text" name="fname" placeholder="First Name" maxlength="25" pattern="[A-Za-z ]+" required>
              </label><br><br>

              <label>Last Name:
                <input type="text" name="lname" placeholder="Last Name" maxlength="25" pattern="[A-Za-z ]+" required>
              </label><br><br>

              <label>Email:
                <input type="email" name="email" placeholder="Email" required>
              </label><br><br>

              <label>Street Address:
                <input type="text" name="street_address" placeholder="Street Address" maxlength="40" required>
              </label><br><br>

              <label>City:
                <input type="text" name="city_town" placeholder="City" maxlength="20" required>
              </label><br><br>

              <label>State:
                <select name="state" required>
                  <option value="">-- Please Select --</option>
                  <option>Johor</option>
                  <option>Kedah</option>
                  <option>Kelantan</option>
                  <option>Malacca</option>
                  <option>Negeri Sembilan</option>
                  <option>Pahang</option>
                  <option>Penang</option>
                  <option>Perak</option>
                  <option>Perlis</option>
                  <option>Sabah</option>
                  <option>Sarawak</option>
                  <option>Selangor</option>
                  <option>Terengganu</option>
                  <option>Kuala Lumpur</option>
                  <option>Labuan</option>
                  <option>Putrajaya</option>
                </select>
              </label><br><br>

              <label>Postcode:
                <input type="text" name="postcode" placeholder="Postcode" maxlength="5" pattern="\d{5}" required>
              </label><br><br>

              <label>Phone:
                <input type="text" name="phone" placeholder="Phone" maxlength="10" pattern="\d{10}" required>
              </label><br><br>

              <label>Type of Enquiry:
                <select name="enquiry_type" required>
                  <option value="">-- Please Select --</option>
                  <option value="Membership">Membership</option>
                  <option value="Products">Products</option>
                  <option value="Pop-up Market Activities">Pop-up Market Activities</option>
                  <option value="Order Inquiry">Order Inquiry</option>
                  <option value="Feedback">Feedback</option>
                  <option value="Other">Other</option>
                </select>
              </label><br><br>

              <label>Message:
                <textarea name="message" placeholder="Message" maxlength="300" required></textarea>
              </label><br><br>

              <label>Upload Photo:
                <input type="file" name="user_photo" accept="image/*" required>
              </label><br><br>

              <button type="submit">Add New Enquiry</button>
            </form>

        <?php elseif ($page == 'membership'): ?>
          <h2>Membership</h2>
          <a href="admin_view.php?page=add_member" class="js-admin-add-btn">➕ Add New Member</a>
          <table class="js-admin-table">
            <tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Login ID</th><th>Password</th><th>Actions</th></tr>
            <?php
            $result = mysqli_query($conn, "SELECT * FROM membership");
            while ($row = mysqli_fetch_assoc($result)) {
              echo "<tr>
                      <td>{$row['id']}</td>
                      <td>" . htmlspecialchars($row['first_name']) . "</td>
                      <td>" . htmlspecialchars($row['last_name']) . "</td>
                      <td>" . htmlspecialchars($row['email']) . "</td>
                      <td>" . htmlspecialchars($row['login_id']) . "</td>
                      <td>" . htmlspecialchars($row['password']) . "</td>
                      <td class=\'js-action-cell\'>
                        <a href='edit_member.php?id={$row['id']}' class='js-admin-btn js-admin-edit-btn'>Edit</a>
                        <a href='delete_member.php?id={$row['id']}' class='js-admin-btn js-admin-delete-btn' onclick='return confirm(\"Are you sure?\")'>Delete</a>
                      </td>
                    </tr>";
            }
            ?>
          </table>

        <?php elseif ($page == 'add_member'): ?>
          <h2>Add New Member</h2>
          <form method="POST" action="add_member.php">
            <label>First Name:
              <input type="text" name="first_name" placeholder="First Name" maxlength="50" pattern="[A-Za-z ]+" required>
            </label><br><br>

            <label>Last Name:
              <input type="text" name="last_name" placeholder="Last Name" maxlength="50" pattern="[A-Za-z ]+" required>
            </label><br><br>

            <label>Email:
              <input type="email" name="email" placeholder="name@example.com" maxlength="100" required>
            </label><br><br>

            <label>Login ID:
              <input type="text" name="login_id" placeholder="Login ID" maxlength="50" pattern="[A-Za-z0-9]+" required>
            </label><br><br>

            <label>Password:
              <input type="text" name="password" placeholder="Password" maxlength="255" required>
            </label><br><br>

            <button type="submit">Add New Member</button>
          </form>

        <?php else: ?>
          <p>Page not found.</p>
        <?php endif; ?>
      </section>
    </div>
  </div>
</body>
</html>



