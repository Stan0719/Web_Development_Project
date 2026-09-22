<!-- // Stanton Qi Jin CHOO (104391591) enquiry.php , enquiry_process , enquiryconfirm.php , index.php , navigation.php . footer.php , search_feature.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Enquiry Form | Brew & Go</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <header class="parallaximage">
    <img src="Images/logob&g.png" alt="Brew and Go logo" class="logomain" />
    <h1 class="headertitle">Brew & Go.</h1>
</header>

 <?php include 'navigationbar.php'; ?>


  <main class="index-main">
    <article class="stan-form-container">
  <div class="stan-form-header">
    <h1>We'd love to hear from you!</h1>
    <p>Fill in the form below and we'll get back to you soon.</p>
  </div>

  <form name="enquiry" method="post" action="enquiry_process.php" enctype="multipart/form-data" class="stan-form">


    
    <fieldset>
      <legend>Personal Information</legend>
      <label>First Name
        <input type="text" name="fname" maxlength="25" pattern="[A-Za-z ]+" required>
      </label>

      <label>Last Name
        <input type="text" name="lname" maxlength="25" pattern="[A-Za-z ]+" required>
      </label>

      <label>Email Address
        <input type="email" name="email" required>
      </label>
    </fieldset>

    <fieldset>
      <legend>Address</legend>
      <label>Street Address
        <input type="text" name="street_address" maxlength="40" required>
      </label>

      <label>City/Town
        <input type="text" name="city_town" maxlength="20" required>
      </label>

      <label>State
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
      </label>

      <label>Postcode
        <input type="text" name="postcode" pattern="\d{5}" maxlength="5" placeholder="e.g. 93000" required>
      </label>
    </fieldset>

<fieldset>
  <legend>Contact and Enquiry</legend>

  <label>Phone Number
    <input type="tel" name="phone" maxlength="10" placeholder="(##) ####-####" required>
  </label>

  <label>Enquiry Type
    <select name="enquiry_type" required>
      <option value="">-- Please Select --</option>
      <option>Membership</option>
      <option>Products</option>
      <option>Pop-up Market Activities</option>
      <option>Order Inquiry</option>
      <option>Feedback</option>
      <option>Other</option>
    </select>
  </label>

  <label>Your Message
    <textarea name="message" rows="5" required placeholder="Please provide details about your enquiry..."></textarea>
  </label>

  <label>Upload a Photo
    <input type="file" name="user_photo" accept="image/*" required>
  </label>
</fieldset>

    <div class="stan-form-buttons">
      <input type="submit" value="Submit Enquiry">
      <input type="reset" value="Reset Form">
    </div>
  </form>
</article>




 <footer><?php include 'footer.php'; ?></footer>

</body>
</html>