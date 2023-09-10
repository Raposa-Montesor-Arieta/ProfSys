<?php
session_start();

// Include database connectivity
include_once('connection1.php');

if (isset($_POST['submit'])) {

    $errorMsg = "";

    $username = mysqli_real_escape_string($conn, $_POST['Username']);
    $password = $_POST['Password']; // Don't hash the password here

    // Validate input
    if (!filter_var($username, FILTER_VALIDATE_EMAIL)) {
        $errorMsg = "Email is not valid. Please try again.";
    } else if (strlen($password) < 6) {
        $errorMsg = "Password should be at least six characters.";
    } else {
        // Check if the username already exists
        $sql = "SELECT * FROM log_in WHERE Username = '$username'";
        $result = mysqli_query($conn, $sql);

        if ($result->num_rows == 1) {
            $errorMsg = "This Email is already in use. Please choose another.";
        } 

            // Insert the user into the database
            $query = "INSERT INTO log_in (Username, Password) 
                      VALUES('$username', '$password')";
            $insertResult = mysqli_query($conn, $query);

            if ($insertResult) {
                // Registration successful, store the user's ID in the session
                $userId = mysqli_insert_id($conn); // Get the last inserted ID
                $_SESSION['id'] = $userId;
                
                // Redirect to a login or dashboard page
                header("Location:../log-in.php");
                exit(); // Stop script execution after redirection
            } else {
                $errorMsg = "Registration failed. Please try again later.";
            }
        }
    }
?>