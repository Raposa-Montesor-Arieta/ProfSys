<?php
// Database credentials
$hostname = "localhost"; // Replace with your database host name
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$database = "reilan"; // Replace with your database name

// Create a database connection
$conn = new mysqli($hostname, $username, $password, $database);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// If you reach this point, the database connection is successful

?>