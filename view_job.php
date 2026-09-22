<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit();
}

// Connect to DB
$conn = new mysqli("localhost", "root", "", "brewdb");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data
$result = $conn->query("SELECT * FROM joinus");

echo "<h2>Submitted Applications</h2>";
echo "<table border='1' cellpadding='10'>
<tr>
<th>ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>Email</th>
<th>Address</th>
<th>City</th>
<th>State</th>
<th>Postcode</th>
<th>Phone</th>
<th>CV</th>
<th>Photo</th>
<th>Submitted</th>
</tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . htmlspecialchars($row['first_name']) . "</td>";
    echo "<td>" . htmlspecialchars($row['last_name']) . "</td>";
    echo "<td>" . htmlspecialchars($row['email']) . "</td>";
    echo "<td>" . htmlspecialchars($row['street_address']) . "</td>";
    echo "<td>" . htmlspecialchars($row['city_town']) . "</td>";
    echo "<td>" . htmlspecialchars($row['state']) . "</td>";
    echo "<td>" . htmlspecialchars($row['postcode']) . "</td>";
    echo "<td>" . htmlspecialchars($row['phone_number']) . "</td>";
    echo "<td><a href='uploads/" . $row['cv_upload'] . "' download>Download CV</a></td>";
    echo "<td><img src='uploads/" . $row['photo_upload'] . "' width='100'></td>";
    echo "<td>" . $row['submission_time'] . "</td>";
    echo "</tr>";
}
echo "</table>";

$conn->close();
?>