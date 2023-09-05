<?php
include "connection1.php";

// Handle login form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["Username"];
    $password = $_POST["Password"];

    // Query the database to check if the username exists
    $sql = "SELECT * FROM log_in WHERE Username = '$username'";
    $result = $conn->query($sql);

    if ($result) {
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $stored_password = $row["Password"]; // Retrieve the stored plain text password

            // Verify the entered password against the stored plain text password
            if ($password === $stored_password) {
                // Password is correct, log in the user
                echo "Login successful!";
                // You can redirect the user to a dashboard or another page here
            } else {
                echo "Incorrect password";
            }
        } else {
            echo "Username not found";
        }
    } else {
        // Print the database error for debugging
        echo "Database error: " . $conn->error;
    }
}
?>