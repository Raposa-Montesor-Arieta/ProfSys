<?php require_once("auth.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css">
    <link rel="stylesheet" href="boxicons.css">
    <script src="js/rememberme.js" type="text/javascript"></script>
    <title>Ludiflex | Login</title>
</head>
<body>
    <div class="box">
        
        <div class="container2">
            <div class="pii">
            <img src="chan.jpg">
            </div>
        </div>
        <div class="container">
            <div class="poo">
                <img src="logo.png">
            </div>
            <div class="top-header">
                <header>Login</header>
            </div>
            <div class="input-field">
            <form action="login.php" method="POST" id="loginForm">
                <input type="text" id="username" class="input" placeholder="Username" name="username" value="<?= isset($_COOKIE['username']) ? $_COOKIE['username'] : '' ?>" required autocomplete="off">
                <i class="bx bx-user"></i>
            </div>
            <div class="input-field">
            <input type="password" id="password" class="input" placeholder="Password" name="password" value="<?= isset($_COOKIE['password']) ? $_COOKIE['password'] : '' ?>" required autocomplete="off">
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-field">
                <button type="submit" name="submit" class="submit" value="Login"> Log-in</button>
            </div>
            <div class="hhh">
                Don't have an account?<a href="registration.php" class="underline">
                 Sign up</a>
            </div>
            <div class="bottom">
                <div class="left">
                <input type="checkbox" value="" id="rememberMe" name="rememberMe" <?= (isset($_COOKIE['username']) && isset($_COOKIE['password'])) ? "checked" : '' ?>>
                <label for="rememberMe">Remember Me</label>
                </div>
                <div class="right">
                    <label><a href="forgot_pass.php">Forgot password?</a></label>
                </div>
            </div>
        </div>
    </div>
</body>
</html>