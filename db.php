<?php
$host = "localhost"; // Agar XAMPP use kar rahe ho to "localhost"
$user = "root"; // Default MySQL user
$pass = ""; // Default password (agar diya nahi to blank chhod do)
$dbname = "marriage_bureau"; // Tumhara database naam

$conn = new mysqli($host, $user, $pass, $dbname);

// Check Connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
