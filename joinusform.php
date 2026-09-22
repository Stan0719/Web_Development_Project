<!DOCTYPE html>

<html lang='en'>

<!-- Description: Join Us Form Page for Brew & Go.-->
<!-- Author: Kee Jia Xuan-->
<!-- Date:  1/4/2025 -->
<!-- Validation: OK 19 April 2025-->

<head>
    <meta charset="utf-8">
    <meta name="author" content="Kee Jia Xuan">
    <meta name="description" content="Join Us Form- Brew & Go.">
    <meta name="keywords" content="joinus, form, coffee">
    <title>Brew & Go. - Join Us Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

 <!-- Header -->
  <header class="parallaximage">
    <img src="Images/logob&g.png" alt="Brew and Go logo" class="logomain" />
    <h1 class="headertitle">Brew & Go.</h1>
  </header>

 <?php include 'navigationbar.php'; ?>

  <main class="index-main" id="main-content">

<body>
<article class="bg_imageform">
	<div class="h1_form"><h1>Fill out the form below, and let’s brew something amazing together!</h1></div>
	
	<form name="joinus" method="post" action="joinus_process.php" enctype="multipart/form-data" class="joinus">

		<fieldset>
			<legend>Personal Details</legend>
			
			<p>
				<label for ="first_name">First Name </label>
				<input type="text" id="first_name" name="first_name" maxlength="25" pattern="[A-Za-z ]+" required="required">
			</p>
			
			<p>
				<label for ="last_name">Last Name </label>
				<input type="text" id="last_name" name="last_name" maxlength="25" pattern="[A-Za-z ]+" required="required">
			</p>
			
			<p>
				<label for="email">Email Address:</label>
				<input type="email" id="email" name="email" placeholder="name@domain.com" required="required">
			</p>
		</fieldset>
		
		<fieldset>
			<legend>Address</legend>
			
			<p>	
				<label for="street_address">Street Address:</label>
				<input type="text" id="street_address" name="street_address" maxlength="40" required="required">
			</p>
			
			<p>
				<label for="city_town">City/Town:</label>
				<input type="text" id="city_town" name="city_town" maxlength="20" required="required">
			</p>
			
			<p>
				<label for="state">State:</label>
				<select id="state" name="state" required="required">
                    <option value="">Select a state</option>
					<option value="Johor">Johor</option>
					<option value="Kedah">Kedah</option>
					<option value="Kelantan">Kelantan</option>
					<option value="Malacca">Malacca</option>
					<option value="Negeri Sembilan">Negeri Sembilan</option>
					<option value="Pahang">Pahang</option>
					<option value="Penang">Penang</option>
					<option value="Perak">Perak</option>
					<option value="Perlis">Perlis</option>
					<option value="Sabah">Sabah</option>
					<option value="Sarawak">Sarawak</option>
					<option value="Selangor">Selangor</option>
					<option value="Terengganu">Terengganu</option>
					<option value="Kuala Lumpur">Kuala Lumpur</option>
					<option value="Labuan">Labuan</option>
					<option value="Putrajaya">Putrajaya</option>
				</select>
			</p>
			
			<p>
				<label for="postcode">Postcode:</label>
				<input type="text" id="postcode" name="postcode" pattern="\d{5}" placeholder="e.g. 93000" maxlength="5" required="required">
			</p>
		</fieldset>
		
		<fieldset>
			<legend>Contact and Documents</legend>
			
			<p>
				<label for="phone_number">Phone Number:</label>
				<input type="tel" id="phone_number" name="phone_number" maxlength="10" placeholder="(##) ####-####" required="required">
			</p>
			
			<p>
				<label for="cv_upload">CV Upload:</label>
				<input type="file" id="cv_upload" name="cv_upload" accept=".doc, .docx, .pdf" required="required">
			</p>
			
			<p>
				<label for="photo_upload">Photo Upload (must be less than 200kbs):</label>
				<input type="file" id="photo_upload" name="photo_upload" accept="image/*" required="required">
			</p>
		</fieldset>
		
		<div class="submit_reset_button">
			<input type= "submit" value="Submit">
			<input type= "reset" value="Reset Form">
		</div>
	</form>
</article>

 <footer><?php include 'footer.php'; ?></footer>


</body>

</html>

