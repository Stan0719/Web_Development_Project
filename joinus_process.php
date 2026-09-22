<?php
session_start();

// authentication check
if (!isset($_SESSION['loggedin'])) {
    ob_end_clean();
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Login Required</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="jx-login-prompt">
            Please <a href="login.php">login</a> to submit your application.
        </div>
    </body>
    </html>
    <?php
    exit();
}

// Start output buffering first
ob_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

// DB connection info
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "brewdb";

// Create uploads directory if it doesn't exist
if (!file_exists('uploads')) {
    if (!mkdir('uploads', 0755, true)) {
        die("Error: Failed to create uploads directory. Please check permissions.");
    }
}

// Initialize error array
$errors = [];

try {
    $conn = new mysqli($host, $user, $pass, $dbname);
    if ($conn->connect_error) {
        throw new Exception("Database connection failed: " . $conn->connect_error);
    }

    // Check if form was submitted
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        throw new Exception("Invalid request method.");
    }

    // Validate required fields
    $required_fields = [
        'first_name', 'last_name', 'email', 'street_address', 
        'city_town', 'state', 'postcode', 'phone_number'
    ];
    
    foreach ($required_fields as $field) {
        if (empty($_POST[$field])) {
            $errors[] = ucfirst(str_replace('_', ' ', $field)) . " is required.";
        }
    }

    // Validate field lengths
    if (strlen($_POST['postcode']) > 5) {
        $errors[] = "Postcode must be 5 characters or less.";
    }
    if (strlen($_POST['phone_number']) > 15) {
        $errors[] = "Phone number must be 15 characters or less.";
    }

    // Validate email format
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    // Check if files are uploaded
    if (!isset($_FILES['cv_upload']) || $_FILES['cv_upload']['error'] !== UPLOAD_ERR_OK) {
        $errors[] = "CV upload is required.";
    }
    
    if (!isset($_FILES['photo_upload']) || $_FILES['photo_upload']['error'] !== UPLOAD_ERR_OK) {
        $errors[] = "Photo upload is required.";
    }

    // If no errors so far, process file uploads
    if (empty($errors)) {
        // Get original file names
        $cv = $_FILES['cv_upload']['name'];
        $photo = $_FILES['photo_upload']['name'];

        // Allowed file extensions
        $allowed_cv_extensions = ['pdf', 'doc', 'docx'];
        $allowed_photo_extensions = ['jpg', 'jpeg', 'png', 'gif'];

        // Get file extensions
        $cv_ext = strtolower(pathinfo($cv, PATHINFO_EXTENSION));
        $photo_ext = strtolower(pathinfo($photo, PATHINFO_EXTENSION));

        // Validate file types
        if (!in_array($cv_ext, $allowed_cv_extensions)) {
            $errors[] = "Invalid CV format. Only PDF, DOC, DOCX allowed.";
        }
        if (!in_array($photo_ext, $allowed_photo_extensions)) {
            $errors[] = "Invalid photo format. Only JPG, JPEG, PNG, GIF allowed.";
        }

        // Validate photo size (< 200KB)
        if ($_FILES['photo_upload']['size'] > 200 * 1024) {
            $errors[] = "Photo must be less than 200KB.";
        }

        // Generate new unique file names
        $cv_newname = uniqid("cv_") . "." . $cv_ext;
        $photo_newname = uniqid("photo_") . "." . $photo_ext;
    }

    // If still no errors, proceed with database operations
    if (empty($errors)) {
        // Create table if not exists
        $sql_create = "
        CREATE TABLE IF NOT EXISTS joinus (
            id INT AUTO_INCREMENT PRIMARY KEY,
            first_name VARCHAR(25),
            last_name VARCHAR(25),
            email VARCHAR(50),
            street_address VARCHAR(40),
            city_town VARCHAR(20),
            state VARCHAR(20),
            postcode VARCHAR(5),
            phone_number VARCHAR(15),
            cv_upload VARCHAR(255),
            photo_upload VARCHAR(255),
            submission_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        )";
        
        if (!$conn->query($sql_create)) {
            throw new Exception("Error creating table: " . $conn->error);
        }

        // Upload CV and photo
        if (!move_uploaded_file($_FILES['cv_upload']['tmp_name'], "uploads/" . $cv_newname)) {
            throw new Exception("Failed to upload CV. Please try again.");
        }
        if (!move_uploaded_file($_FILES['photo_upload']['tmp_name'], "uploads/" . $photo_newname)) {
            // Clean up the already uploaded CV if photo fails
            if (file_exists("uploads/" . $cv_newname)) {
                unlink("uploads/" . $cv_newname);
            }
            throw new Exception("Failed to upload photo. Please try again.");
        }

        // Debug: Show what will be inserted
        error_log("Inserting data: " . print_r($_POST, true));

        // Prepare SQL with new file names
        $stmt = $conn->prepare("INSERT INTO joinus 
            (first_name, last_name, email, street_address, city_town, state, postcode, phone_number, cv_upload, photo_upload)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        if (!$stmt) {
            throw new Exception("Prepare failed: " . $conn->error);
        }

        $stmt->bind_param("ssssssssss",
            $_POST['first_name'],
            $_POST['last_name'],
            $_POST['email'],
            $_POST['street_address'],
            $_POST['city_town'],
            $_POST['state'],
            $_POST['postcode'],
            $_POST['phone_number'],
            $cv_newname,
            $photo_newname
        );

        if (!$stmt->execute()) {
            throw new Exception("Execute failed: " . $stmt->error);
        }

        // Success - display confirmation page
        ob_end_clean(); // Clean the buffer before output
?>
<!DOCTYPE html>
<html>
<head>
    <title>Application Submitted</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="submitted_joinusform">
    <h2 class="joinusform_success">Thank you for your application</h2>
    <h2>Our team will contact you shortly</h2>
    <table class="submitted_joinusform_table">
        <tr>
            <th>Full Name:</th>
            <td><?php echo htmlspecialchars($_POST['first_name']) . ' ' . htmlspecialchars($_POST['last_name']); ?></td>
        </tr>
        <tr>
            <th>Email:</th>
            <td><?php echo htmlspecialchars($_POST['email']); ?></td>
        </tr>
        <tr>
            <th>Phone:</th>
            <td><?php echo htmlspecialchars($_POST['phone_number']); ?></td>
        </tr>
        <tr>
            <th>Address:</th>
            <td>
                <?php 
                    echo htmlspecialchars($_POST['street_address']) . ', ' . 
                         htmlspecialchars($_POST['postcode']) . ', ' . 
                         htmlspecialchars($_POST['city_town']) . ', ' . 
                         htmlspecialchars($_POST['state']); 
                ?>
            </td>
        </tr>
        <tr>
            <th>CV:</th>
            <td><a href="uploads/<?php echo htmlspecialchars($cv_newname); ?>" download>Download</a></td>
        </tr>
        <tr>
            <th>Photo:</th>
            <td><img src="uploads/<?php echo htmlspecialchars($photo_newname); ?>" width="150" alt="Applicant Photo"></td>
        </tr>
    </table>
    <div class="submitted_joinusform_buttons">
        <button onclick="location.href='index.php'">Go Back Home</button>
    </div>
</div>
</body>
</html>
<?php
        exit(); // Stop further execution after successful submission
    }
} catch (Exception $e) {
    $errors[] = $e->getMessage();
}

// errors
ob_end_clean(); // Clean the buffer before error output
?>

<!DOCTYPE html>
<html>
<head>
    <title>Application Error</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="jx-error-container">
    <h2>There was a problem with your submission</h2>
    
    <div class="jx-error-messages">
        <ul>
            <?php foreach ($errors as $error): ?>
                <li><?php echo htmlspecialchars($error); ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
    
    <div class="jx-error-buttons">
        <button onclick="history.back()">Go Back and Try Again</button>
        <button onclick="location.href='index.php'">Return to Home</button>
    </div>
</div>
</body>
</html>
<?php
// Close connections
if (isset($stmt)) $stmt->close();
if (isset($conn)) $conn->close();
?>