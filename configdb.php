<?php
$servername = "localhost";
$username = "root";
$password = "1234";

// Create connection
$conn = new mysqli($servername, $username, $password,'rms');

// Check connection
if ($conn->connect_error) {
    die("Connection Database failed: " . $conn->connect_error);
}
echo "Connection Database successfully";
?>
