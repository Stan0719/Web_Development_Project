<!-- // Stanton Qi Jin CHOO (104391591) enquiry.php , enquiry_process , enquiryconfirm.php , index.php , navigation.php . footer.php , search_feature.php -->
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
?>
<!-- navbar.php -->
<nav class="main-nav" id="main-navigation">
  <div class="nav-inner">
    <input type="checkbox" id="nav-toggle" class="nav-toggle">
    <label for="nav-toggle" class="hamburger">
      <span></span><span></span><span></span>
    </label>
    <ul class="nav-links">
      <li><a href="index.php"><img src="images/logob&g.png" alt="Brew & Go Logo" class="logodropdown"></a></li>
      <li class="dropdown">
        <a href="product.php" class="dropbtn">Product Selection</a>
        <ul class="dropdown-content">
          <li><a href="basic1.php#top">Basic Brew</a></li>
          <li><a href="artisan2.php#top">Artisan Brew</a></li>
          <li><a href="non3.php#top">Non-Coffee</a></li>
          <li><a href="hot4.php#top">Hot Coffee</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="activities.php" class="dropbtn">Activities</a>
        <ul class="dropdown-content">
          <li><a href="Pass_activities.php">Past</a></li>
          <li><a href="Current.php">Current</a></li>
          <li><a href="Coming_Soon.php">Future</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="joinus.php" class="dropbtn">Join Us</a>
        <ul class="dropdown-content">
          <li><a href="joinusform.php">FORM</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a href="enquiry.php" class="dropbtn">Enquiries</a>
        <ul class="dropdown-content">
          <li><a href="enquiry.php">FORM</a></li>
          <li><a href="learnmore.php">FAQ</a></li>
        </ul>
      </li>
      <?php if (isset($_SESSION['user_role']) && $_SESSION['user_role'] == 'admin'): ?>
      <li class="dropdown">
        <a  class="dropbtn">Admin Tools</a> 
        <ul class="dropdown-content">
          <li><a href="admin_view.php">Admin View </a></li>
          <li><a href="/phpmyadmin/" target="_blank">PHPMyAdmin</a></li> 
        </ul>
      </li>
      <?php endif; ?>
    </ul>
    <div class="right-container">
      <form action="search_results.php" method="get" class="search-bar">
        <input type="text" name="query" placeholder="Search..." />
        <button class="searchbutton" type="submit">Search</button>
      </form>
      <?php if (isset($_SESSION['login_id'])): ?>
        <span class="welcome-message">Welcome, <?php echo htmlspecialchars($_SESSION['login_id']); ?>!</span>
        <a href="logout.php" class="login-icon" title="Logout"><img src="Images/logout.svg" alt="Logout Icon" class="logodropdown"></a> 
      <?php else: ?>
        <a href="login.php" class="login-icon" title="Login"><img src="images/login.svg" alt="Login Icon" class="logodropdown"></a>
      <?php endif; ?>
    </div>
  </div>
</nav>
