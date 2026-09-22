
<?php
session_start();
// Stanton Qi Jin CHOO (104391591) enquiry.php , enquiry_process , enquiryconfirm.php , index.php , navigation.php . footer.php , search_feature.php

//  if theres data  available if not default empty strings
$enquiry = $_SESSION['enquiry'] ?? [];

$fname = htmlspecialchars($enquiry['fname'] ?? '');
$lname = htmlspecialchars($enquiry['lname'] ?? '');
$email = htmlspecialchars($enquiry['email'] ?? '');
$street = htmlspecialchars($enquiry['street_address'] ?? '');
$city = htmlspecialchars($enquiry['city_town'] ?? '');
$state = htmlspecialchars($enquiry['state'] ?? '');
$postcode = htmlspecialchars($enquiry['postcode'] ?? '');
$phone = htmlspecialchars($enquiry['phone'] ?? '');
$enquiry_type = htmlspecialchars($enquiry['enquiry_type'] ?? '');
$message = nl2br(htmlspecialchars($enquiry['message'] ?? ''));
$photoName = htmlspecialchars($enquiry['photoName'] ?? '');

$hasData = !empty($fname) && !empty($lname);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Enquiry Confirmation | Brew & Go</title>
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
          Thank you for your enquiry, <span class="stan-highlight"><?= $fname ?></span>!
        </h2>
        <p class="stan-confirmation-message">
          We have received your message and will get back to you shortly.
        </p>

        <section class="stan-details-section">
          <h3>Your Submitted Details:</h3>
          <ul class="stan-details-list">
            <li><strong>First Name:</strong> <?= $fname ?></li>
            <li><strong>Last Name:</strong> <?= $lname ?></li>
            <li><strong>Email:</strong> <?= $email ?></li>
            <li><strong>Street Address:</strong> <?= $street ?></li>
            <li><strong>City/Town:</strong> <?= $city ?></li>
            <li><strong>State:</strong> <?= $state ?></li>
            <li><strong>Postcode:</strong> <?= $postcode ?></li>
            <li><strong>Phone Number:</strong> <?= $phone ?></li>
            <li><strong>Enquiry Type:</strong> <?= $enquiry_type ?></li>
            <li><strong>Message:</strong> <?= $message ?></li>
          </ul>

          <?php if ($photoName && file_exists("Uploads/$photoName")): ?>
            <p><strong>Uploaded Photo:</strong></p>
            <img src="Uploads/<?= $photoName ?>" alt="User Photo" class="stan-confirmation-photo" />
          <?php else: ?>
            <p><strong>Uploaded Photo:</strong> No photo uploaded or file not found.</p>
          <?php endif; ?>
        </section>

        <a href="index.php" class="stanenquiry-btn">Back to Home</a>

      <?php else: ?>
        <h2 class="stan-confirmation-title">Oops! No enquiry data found.</h2>
        <p class="stan-confirmation-message">Please submit your enquiry first.</p>
        <a href="enquiry.php" class="stanenquiry-btn">Go to Enquiry Form</a>
      <?php endif; ?>
    </main>

    <footer><?php include 'footer.php'; ?></footer>
</body>
</html>