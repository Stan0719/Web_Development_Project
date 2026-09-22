<?php
session_start(); 


include 'db_connect.php'; 


include 'login_createtable.php'; 

$error = "";

// Handle login POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $login_conn = mysqli_connect("localhost", "root", "", "brewdb");

    if (!$login_conn) {
        $error = "Database connection failed for login processing.";
    } else {
        $username_posted = trim($_POST['username']);
        $password_posted = $_POST['password'];
        $login_successful = false;

        // Attempt Admin Login
        $query_admin = "SELECT id, username, password FROM admin_users WHERE LOWER(username) = LOWER(?) AND LOWER(password) = LOWER(?)";
        $stmt_admin = mysqli_prepare($login_conn, $query_admin);

        if ($stmt_admin) {
            mysqli_stmt_bind_param($stmt_admin, "ss", $username_posted, $password_posted);
            mysqli_stmt_execute($stmt_admin);
            $result_admin = mysqli_stmt_get_result($stmt_admin);

            if ($result_admin && mysqli_num_rows($result_admin) == 1) {
                $admin_user = mysqli_fetch_assoc($result_admin);
                session_regenerate_id(true);
                $_SESSION['loggedin'] = true;
                $_SESSION['admin_logged_in'] = true; 
                $_SESSION['user_id'] = $admin_user['id'];
                $_SESSION['username'] = $admin_user['username'];
                $_SESSION['login_id'] = $admin_user['username'];
                $_SESSION['user_role'] = 'admin';
                $login_successful = true;
                header("Location: index.php"); 
                exit();
            }
            mysqli_stmt_close($stmt_admin);
            if (!$result_admin && mysqli_error($login_conn)) { // Check for execution error after trying to fetch
                $error = "Login query execution failed (admin): " . mysqli_error($login_conn);
            }
        } else {
            $error = "Login query failed to prepare (admin): " . mysqli_error($login_conn);
        }

        // If Admin Login Failed (and no critical DB error occurred), Attempt Member Login
        if (!$login_successful && empty($error)) {
            $query_member = "SELECT id, login_id, password, first_name FROM membership WHERE LOWER(login_id) = LOWER(?)";
            $stmt_member = mysqli_prepare($login_conn, $query_member);

            if ($stmt_member) {
                mysqli_stmt_bind_param($stmt_member, "s", $username_posted); // Use $username_posted as login_id input
                mysqli_stmt_execute($stmt_member);
                $result_member = mysqli_stmt_get_result($stmt_member);

                if ($result_member && mysqli_num_rows($result_member) == 1) {
                    $member_user = mysqli_fetch_assoc($result_member);
                    if (password_verify($password_posted, $member_user['password'])) {
                        session_regenerate_id(true);
                        $_SESSION['loggedin'] = true;
                        $_SESSION['user_id'] = $member_user['id'];
                        $_SESSION['login_id'] = $member_user['login_id'];
                        $_SESSION['username'] = $member_user['first_name'];
                        $_SESSION['user_role'] = 'member';
                        $login_successful = true;
                        header("Location: index.php");
                        exit();
                    }
                }
                mysqli_stmt_close($stmt_member);
                if (!$result_member && mysqli_error($login_conn)) { // Check for execution error
                    $error = "Login query execution failed (member): " . mysqli_error($login_conn);
                }
            } else {
                $error = "Login query failed to prepare (member): " . mysqli_error($login_conn);
            }
        }

        // If still not logged in, set generic error 
        if (!$login_successful && empty($error)) {
            $error = "Invalid username or password.";
        }
        
        mysqli_close($login_conn);
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <header class="header">
    <a href="index.php"><img src="images/logob&g.png" alt="Brew & Go Logo" class="logo"></a>
    <a href="index.php" class="back-home-btn">Go Back</a>
  </header>

<section class="body-login">
    <form id="logform" action="login.php" method="POST" class="login-form"> 
        <h1 class="login-title">Login</h1>
        <?php if (!empty($error)): ?>
            <p><?php echo htmlspecialchars($error); ?></p>
        <?php endif; ?>
        <div class="input-box">
            <i class='bx bxs-user'></i>
            <input type="text" name="username" placeholder="Username" 
                   required maxlength="50" title="Enter your username">
        </div>

        <div class="input-box">
            <i class='bx bxs-lock-alt'></i>
            <input type="password" name="password" placeholder="Password" 
                   required maxlength="255" title="Enter your password">
        </div>

        <div class="remember-forgot-box">
            <label for="remember">
                <input type="checkbox" id="remember" name="remember">
                Remember me
            </label>
            <a href="#">Forgot Password?</a>
        </div>

        <button type="submit" class="login-btn">Login</button>

        <p class="register">
            Don't have an account? <a href="memberregistrationform.php">Register</a>
        </p>
    </form>
</section>
  <footer>
    <?php include('footer.php'); ?>
  </footer>
</body>
</html>