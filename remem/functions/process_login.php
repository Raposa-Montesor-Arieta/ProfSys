<?php
session_start();
include("connection3.php");

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Replace this with your actual authentication logic
    $authentication_successful = false;

    // For example, you might query your database to check if the username and password match
    $query = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        if (mysqli_num_rows($result) == 1) {
            $authentication_successful = true;
        } else {
            // Log the query and the number of rows returned (for debugging)
            error_log("Query: $query");
            error_log("Number of Rows: " . mysqli_num_rows($result));
        }
    } else {
        // Log any database query errors (for debugging)
        error_log("Database Error: " . mysqli_error($conn));
    }

    if ($authentication_successful) {
        $_SESSION['username'] = $username;

        // Check if "Remember Me" is checked
        if (isset($_POST['remember_me']) && $_POST['remember_me'] == 'on') {
            // Create a cookie to remember the user
            setcookie('username', $username, time() + 3600 * 24 * 7, '/');
        }

        // Redirect to the dashboard or wherever you want
        header('Location: dashboard.php');
        exit();
    } else {
        echo "Invalid username or password. <a href='../asd.php'>Try again</a>";
    }
}
?>
