<?php
$servername = "localhost";
$username = "root"; // replace with your database username if different
$password = ""; // replace with your database password if different
$dbname = "clinic";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$appointment = $_POST['appointment'];
$patient = $_POST['patient'];
$phone = $_POST['phone'];
$doctor = $_POST['doctor'];
$date = $_POST['date'];

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO appointments (appointment_no, patient_name, phone_number, doctor, appointment_date) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("issss", $appointment, $patient, $phone, $doctor, $date);

// Execute the statement
if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

// Close connections
$stmt->close();
$conn->close();
?>
