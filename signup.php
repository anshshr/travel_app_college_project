<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "travel_app";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    echo "this is not working";
    die;
    die("Connection failed: " . $conn->connect_error);
}

// Insert data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "this is not working at all";
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"]; 
    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";


    if ($conn->query($sql) === TRUE) {
        // Redirect to home.php with the user's name in the URL
        echo "registered succesfully";
        header("Location: home.php");
        exit();
    } else {
        echo " this is not working";
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
