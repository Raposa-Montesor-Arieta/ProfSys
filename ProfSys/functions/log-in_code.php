<?php
session_start();

if (isset($_SESSION['id'])) {
    header("Location: ../list.php");
    exit(); // Exit to prevent further execution
}

// Include database connectivity
include_once('connection1.php');

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

            if (password_verify($password, $stored_password)) {
                // Password is correct, log in the user
                $_SESSION['id'] = $row['id'];
                $_SESSION['Username'] = $row['Username'];
                header("Location: ../list.php");
                exit(); // Exit to prevent further execution
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