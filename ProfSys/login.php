<?php
    include 'functions/connection3.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css"> <!-- Include your CSS file -->
    <title>Login</title>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form action="functions/logcode.php" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <label for="remember_me">Remember Me</label>
            <input type="checkbox" name="remember_me" id="remember_me">
            <button type="submit" name="login">Login</button>
        </form>
        <p>Don't have an account? <a href="asd.php">Register</a></p>
    </div>
</body>
</html>
