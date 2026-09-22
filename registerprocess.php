<?php
session_start(); // Ensure session is started

// DB connection info
$host = "localhost";
$username = "root";
$password = "";
$dbname = "brewdb";

// Connect to DB
$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create table only if not exists
$sql_create = "CREATE TABLE IF NOT EXISTS membership (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(50) NOT NULL,
    last_name VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    login_id VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
$conn->query($sql_create); // No need to check if it fails, since table might exist

// Prepare form data
// Check if all required POST variables are set
if (isset($_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['login_id'], $_POST['password'])) {
    $first_name = trim($_POST['first_name']);
    $last_name = trim($_POST['last_name']);
    $email = trim($_POST['email']);
    $login_id = trim($_POST['login_id']);
    $plain_password = trim($_POST['password']); // Store plain password before hashing
    $hashed_password = password_hash($plain_password, PASSWORD_DEFAULT); // hash the password

    $sql = "INSERT INTO membership (first_name, last_name, email, login_id, password)
            VALUES (?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        // Log detailed error for server admin, show generic error to user
        error_log("Prepare failed: (" . $conn->errno . ") " . $conn->error);
        die("An error occurred during registration preparation. Please try again later.");
    }

    // Bind parameters
    $stmt->bind_param("sssss", $first_name, $last_name, $email, $login_id, $hashed_password);

    if ($stmt->execute()) {
        // Store registration details in session for confirmation page
        $_SESSION['member_registration_details'] = [
            'fname' => $first_name,
            'lname' => $last_name,
            'email' => $email,
            'login_id' => $login_id,
            'password' => $plain_password // Storing plain text password in session (SECURITY RISK)
        ];

        // Redirect to confirmation page
        header("Location: memberconfirm.php");
        exit(); // Important to prevent further script execution
    } else {
        // Check for duplicate entry specifically for login_id if that's a unique key
        if ($conn->errno == 1062) { // 1062 is the MySQL error code for duplicate entry
            echo "Error: This Login ID ('" . htmlspecialchars($login_id) . "') is already taken. Please choose another.";
        } else {
            error_log("Execute failed: (" . $stmt->errno . ") " . $stmt->error);
            echo "Error: Could not register. Please try again. (" . $stmt->errno . ")";
        }
    }
    $stmt->close();
} else {
    // Handle missing POST data
    $missing_fields = [];
    if (!isset($_POST['first_name'])) $missing_fields[] = "First Name";
    if (!isset($_POST['last_name'])) $missing_fields[] = "Last Name";
    if (!isset($_POST['email'])) $missing_fields[] = "Email";
    if (!isset($_POST['login_id'])) $missing_fields[] = "Login ID";
    if (!isset($_POST['password'])) $missing_fields[] = "Password";
    
    echo "Error: The following fields are missing: " . implode(", ", $missing_fields) . ". Please fill out the entire form.";
    echo "<p><a href='memberregistrationform.php'>Go back to registration</a></p>";
}
$conn->close();
?>
