<?php
include 'db.php'; // Database Connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $religion = $_POST['religion'];
    $country = $_POST['country'];
    $preferences = $_POST['preferences'];

    // Data Insert Query
    $sql = "INSERT INTO users (full_name, email, phone, gender, dob, religion, country, preferences) 
            VALUES ('$full_name', '$email', '$phone', '$gender', '$dob', '$religion', '$country', '$preferences')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Registration Successful!'); window.location='index.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>
