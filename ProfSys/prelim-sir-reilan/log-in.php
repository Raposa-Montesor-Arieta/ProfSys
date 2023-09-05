<?php
  
 
      
  include 'connection1.php';
  
  if (isset($_POST['register'])) {
      
      $errorMsg = "";
    
      $email    = mysqli_real_escape_string($con, $_POST['Username']);
      $password = mysqli_real_escape_string($con, $_POST['Password']);
      $password = password_hash($password, PASSWORD_DEFAULT);
      
      $sql_query = "SELECT * FROM log_in WHERE Username = '$Username'";
      $move = mysqli_query($con, $sql_query);
        
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

          $errorMsg = "Email in not valid try again";

      }else if(strlen($password) < 4) {
          $errorMsg  = "Password should be six digits";
      }else if($execute->num_rows == 1){
          $errorMsg = "This Email is already exists";
      }else{
          $query= "INSERT INTO register (email,password) 
                  VALUES('$email','$password')";
          $result = mysqli_query($con, $query);
      if ($result == true) {
        echo "<script>alert('REGISTRATION COMPLETE!'); </script>";
        echo "<script>window.location.assign('sign-in1.php');</script>" ;
      }else{
          $errorMsg  = "You are not Registred..Please Try again";
      }
    }
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="boxicons/css/boxicons.css">
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
                <input type="text" class="input" placeholder="Username" name="Username" required>
                <i class="bx bx-user"></i>
            </div>
            <div class="input-field">
                <input type="password" class="input" placeholder="Password" name="Password" required>
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-field">
                <input type="submit" name= "login"class="submit" value="Login">
            </div>
            <div class="bottom">
                <div class="left">
                    <input type="checkbox"  id="check">
                    <label for="check"> Remember Me</label>
                </div>
                <div class="right">
                    <label><a href="#">Forgot password?</a></label>
                </div>
            </div>
        </div>
    </div>
</body>
</html>