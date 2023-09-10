<?php
session_start();

$conn = new mysqli("localhost", "root", "", "dummy_db");

if (!$conn) {
    die("Database Connection Failed");
}

if (isset($_POST['register'])) {
    $username = addslashes($conn->real_escape_string($_POST['username']));
    $password = md5($_POST['password']); // Hash the password using MD5

    $stmt = $conn->prepare("INSERT INTO `users` (`username`, `password`) VALUES (?, ?)");
    $stmt->bind_param('ss', $username, $password);

    if ($stmt->execute()) {
        echo "<script>alert('Registration Successful!'); window.location.href = './index.php';</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
    }    
}
?>
