<?php
include("connection3.php");

if (isset($_POST['register'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password'];

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);
    $created_at = date("Y-m-d H:i:s");

    $query = "INSERT INTO users (username, password, created_at) VALUES ('$username', '$hashed_password', '$created_at')";

    if (mysqli_query($conn, $query)) {
        echo "Registration successful. <a href='../login.php'>Login</a>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
