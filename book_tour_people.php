<?php
// Start the session
session_start();

// Database connection parameters
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "travel_app"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$age = $_POST['age'];
$no_of_people = $_POST['no_of_people'];
$gender = $_POST['gender'];
$location = $_POST['location'];
$preferred_time = $_POST['preferred_time'];
$additional_information = $_POST['additional_information'];

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO book_tour ( name, age, no_of_people, gender, location, preferred_time, additional_information) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("siissss", $name, $age, $no_of_people, $gender, $location, $preferred_time, $additional_information);

// Execute the statement
if ($stmt->execute()) {
    // Store booking details in session
    $_SESSION['booking_details'] = [
        'name' => $name,
        'age' => $age,
        'no_of_people' => $no_of_people,
        'gender' => $gender,
        'location' => $location,
        'preferred_time' => $preferred_time,
        'additional_information' => $additional_information,
    ];
    
    // Redirect to the confirmation page
    header("Location: confirmation.php");
    exit();
} else {
    echo "Error: " . $stmt->error;
}

// Close connections
$stmt->close();
$conn->close();
?>
