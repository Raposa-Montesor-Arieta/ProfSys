<?php
//   session_start();

//   if (isset($_SESSION['id'])) {
//       header("");
//   }

//   // Include database connnectivity
    
//   include_once('connection1.php');
  
//   if (isset($_POST['submit'])) {

//       $errorMsg = "";

//       $Username = mysqli_real_escape_string($conn, $_POST['Username']);
//       $Password = mysqli_real_escape_string($conn, $_POST['Password']); 
      
//   if (!empty($Username) || !empty($Password)) {
//         $query  = "SELECT * FROM log_in WHERE Username = '$Username'";
//         $result = mysqli_query($conn, $query);
//         if(mysqli_num_rows($result) == 1){
//           while ($row = mysqli_fetch_assoc($result)) {
//             if (password_verify($Password, $row['Password'])) {
//                 $_SESSION['id'] = $row['id'];
//                 $_SESSION['Username'] = $row['Username'];
//                 header("");
//             }else{
//                 $errorMsg = "Email or Password is invalid";
//             }    
//           }
//         }else{
//           $errorMsg = "No user found on this email";
//         } 
//     }else{
//       $errorMsg = "Email and Password is required";
//     }
//   }

require_once("functions/auth.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="boxicons/css/boxicons.css">
    <script src="js/rememberme.js" type="text/javascript"></script>
    <title>Ludiflex | Login</title>
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
                <header>Login</header>
            </div>
            <div class="input-field">
            <form action="functions/log-in_code.php" method="POST" id="loginForm">
                <input type="text" id="Username" class="input" placeholder="Username" name="Username" value="<?= isset($_COOKIE['Username']) ? $_COOKIE['username'] : '' ?>" required autocomplete="off">
                <i class="bx bx-user"></i>
            </div>
            <div class="input-field">
            <input type="password" id="Password" class="input" placeholder="Password" name="Password" value="<?= isset($_COOKIE['Password']) ? $_COOKIE['password'] : '' ?>" required autocomplete="off">
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
                <input type="checkbox" value="" id="rememberMe" name="rememberMe" <?= (isset($_COOKIE['Username']) && isset($_COOKIE['Password'])) ? "checked" : '' ?>>
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