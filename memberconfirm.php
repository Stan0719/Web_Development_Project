<?php
session_start();

// Use session data if available, else default empty strings
$registration_details = $_SESSION['member_registration_details'] ?? [];

$fname = htmlspecialchars($registration_details['fname'] ?? '');
$lname = htmlspecialchars($registration_details['lname'] ?? '');
$email = htmlspecialchars($registration_details['email'] ?? '');
$login_id = htmlspecialchars($registration_details['login_id'] ?? '');
$password_plain = htmlspecialchars($registration_details['password'] ?? ''); // Retrieve plain password

$hasData = !empty($fname) && !empty($lname) && !empty($email) && !empty($login_id) && !empty($password_plain);

// Clear the session data after retrieving it to prevent re-display on refresh
unset($_SESSION['member_registration_details']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Registration Confirmation | Brew & Go</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
    <header class="parallaximage">
        <img src="Images/logob&g.png" alt="Brew and Go logo" class="logomain" />
        <h1 class="headertitle">Brew & Go.</h1>
    </header>

    <?php 
    include 'navigationbar.php'; 
    ?>

    <main class="stan-confirmation-container">
      <?php if ($hasData): ?>
        <h2 class="stan-confirmation-title">
          Thank you for registering, <span class="stan-highlight"><?= $fname ?></span>!
        </h2>
        <p class="stan-confirmation-message">
          Your account has been successfully created.
        </p>

        <section class="stan-details-section">
          <h3>Your Registration Details:</h3>
          <ul class="stan-details-list">
            <li><strong>First Name:</strong> <?= $fname ?></li>
            <li><strong>Last Name:</strong> <?= $lname ?></li>
            <li><strong>Email:</strong> <?= $email ?></li>
            <li><strong>Login ID:</strong> <?= $login_id ?></li>
            <li><strong>Password:</strong> <span><?= $password_plain ?></span> (For testing purposes)</li>
          </ul>
        </section>

        <a href="login.php" class="stanenquiry-btn">Login Now</a>
        <a href="index.php" class="stanenquiry-btn">Back to Home</a>

      <?php else: ?>
        <h2 class="stan-confirmation-title">Oops! No registration data found.</h2>
        <p class="stan-confirmation-message">Please register first.</p>
        <a href="memberregistrationform.php" class="stanenquiry-btn">Go to Registration Form</a>
      <?php endif; ?>
    </main>

 <footer><?php include 'footer.php'; ?></footer>
</body>
</html>