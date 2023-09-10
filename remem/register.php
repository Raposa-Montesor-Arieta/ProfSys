<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="css/style1.css">
    <style>
        /* Add the CSS styles here */
        /* ... (all the CSS styles you provided) ... */
    </style>
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
            <header>Registration Page</header>
            </div>
            <div class="input-field">
            <form action="register_process.php" method="post" class="pii">
                <div class="input-field">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" class="input" required>
                </div>

                <div class="input-field">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" class="input" required>
                </div>
                <input type="submit" name="register" value="Register" class="submit">
            </form>
           
        </div>
    </div>
</body>
</html>
