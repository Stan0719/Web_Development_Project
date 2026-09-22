<!DOCTYPE html>

<html lang='en'>
<head>
	<meta charset= 'utf-8'>
	<meta name='author' content='Angie Yee'>
	<meta name='description' content='Membership Register'>
	<meta name='keywords' content='member, membership, register, form'>
	<title>Membership Registration Form</title>
	<link rel='stylesheet' type='text/css' href='style.css'>
</head>

<?php include ('db_connect.php'); ?>
<?php include ('membership_createtable.php'); ?>

<header class="parallaximage">
    <img src="Images/logob&g.png" alt="Brew and Go logo" class="logomain" />
    <h1 class="headertitle">Brew & Go.</h1>
</header>

<?php include 'navigationbar.php'; ?>
<body>
 <main class="index-main" id="main-content">
<article class="membershipformarticle">

<form name="registerform" method='post' action='registerprocess.php' autocomplete='off' class='registerform'>
<p class='title'><strong>Membership Register Form</strong></p>
<p class='message'>Register a member to receive our updates!</p>

<div class='bigformgroup'>
<div class='formgroup'>
		<div class='name'>
        <label>
            <input class="input" type="text" placeholder="" required="" name="first_name">
            <span>Firstname</span>
        </label>

        <label>
            <input class="input" type="text" placeholder="" required="" name="last_name">
            <span>Lastname</span>
        </label>
    </div>  
            
    <label>
        <input class="input" type="email" placeholder="" required="" name="email">
        <span>Email</span>
    </label> 
        
    <label>
        <input class="input" type="text" placeholder="" required="" name="login_id">
        <span>Login ID</span>
    </label>
    <label>
        <input class="input" type="password" placeholder="" required="" name="password">
        <span>Password</span>
    </label>
</div>
</div>

<div class='formbutton'>
<button type='submit'>Register</button>
<button type='reset'>Reset</button>
</div>

<p class='signin'>
	Already have an account ?
	<a href='login.php'>Sign in</a>
</p>

</form>
</main>
</article>
 <footer><?php include 'footer.php'; ?></footer>


</body>
</html>