<?php
    include 'functions/connection1.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="boxicons/css/boxicons.css">
    <title>Register</title>
</head>
<body>
    <div class="box">
        <div class="container2">
            <div class="pii">
            <img src="image/chan.jpg">
            </div>
        </div>
        <div class="container">
            <div class="poo">
                <img src="image/logo.png">
            </div>
            <div class="top-header">
                <header>Sign-Up</header>
            </div>
            <div class="input-field">
            <form action="register_process.php" method="POST">
                <input type="text" class="input" placeholder="Username" name="username" required>
                <i class="bx bx-user"></i>
            </div>
            <div class="input-field">
                <input type="password" class="input" placeholder="Password" name="password" required>
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-field">
                <input type="submit" name="register" class="submit" value="Register"></input>
            </div>
            </div>
        </div>
</body>
</html>