
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
                <header>Sign-In</header>
            </div>
            <div class="input-field">
            <form action="reg_code.php" method="POST">
                <input type="text" class="input" placeholder="Username" name="Username" required>
                <i class="bx bx-user"></i>
            </div>
            <div class="input-field">
                <input type="password" class="input" placeholder="Password" name="Password" required>
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-field">
                <button type="submit" name="submit" class="submit" value="Login"> Sign Up</button>
            </div>
        </div>
    </div>
</body>
</html>