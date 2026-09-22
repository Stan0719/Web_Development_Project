<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Kee Jia Xuan">
	<meta name="description" content="Activity Page - Brew & Go.">
	<meta name="keywords" content="activity, current, past, coming, soon">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Brew & Go - Activity Page</title>
	<link rel="stylesheet" href="style.css"> 
</head>

<body>


  <!-- Header -->
  <header class="parallaximage">
    <img src="Images/logob&g.png" alt="Brew and Go logo" class="logomain" />
    <h1 class="headertitle">Brew & Go.</h1>
  </header>

 <?php include 'navigationbar.php'; ?>
  
  <!-- Main Content -->
  <main class="index-main" id="main-content">

<!-- Carousel Container -->
<article class="activitybg">
	<div class="box_activity">
		<div class="activity_h1"><h1>Activities</h1></div>
	</div>
	
	<div class="activitybg2">
	<!-- Radio Buttons -->
    <input type="radio" name="activity" id="coming" value="Coming">
    <input type="radio" name="activity" id="current" value="Current" checked="checked">
    <input type="radio" name="activity" id="pass" value="Pass">

    <!-- Carousel Wrapper -->
    <div id="carousel">
		<div class="carousel-wrapper">
			<div class="item">
				<a href="Current.php" target="_blank">
					<img src="images/current_img.jpeg" alt="Current Activities">
				</a>
				<h3 class="jx-name">Current Activities</h3>
			</div>
		
			<div class="item">
				<a href="Coming_Soon.php" target="_blank">
					<img src="images/coming_img.jpeg" alt="Coming Soon">
				</a>
				<h3 class="jx-name">Coming Soon</h3>
			</div>
		
			<div class="item">
				<a href="Pass_Activities.php" target="_blank">
					<img src="images/pass_img.jpeg" alt="Past Activities">
				</a>
				<h3 class="jx-name">Past Activities</h3>
			</div>
		</div>
    </div>

    <!-- Navigation -->
    <div class="navigation">
		<label for="coming" class="button"></label>
		<label for="current" class="button"></label>
		<label for="pass" class="button"></label>
    </div>
	</div>
</article>
 <footer><?php include 'footer.php'; ?></footer>


</body>
</html>


