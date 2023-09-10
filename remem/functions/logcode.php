<?php
include("connection3.php");
session_start();

if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);

        // Verify the password
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $username;

            // Check if "Remember Me" is checked
            if (isset($_POST['remember_me']) && $_POST['remember_me'] == 'on') {
                // Create a cookie to remember the user
                setcookie('username', $username, time() + 3600 * 24 * 7, '/');
            }

            header('Location: ../home.php');
            exit();
        } else {
            echo "Invalid password. <a href='../home.php'>Try again</a>";
        }
    } else {
        echo "Invalid username. <a href='../login.php'>Try again</a>";
    }
}
?>
