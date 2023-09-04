
<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profcss/form.css">
    <link rel="stylesheet" href="profcss/style.css">
    <title>Form</title>
</head>
<body>

    <nav>
        <div class="nav-left">
            <img src="logo.png" class="logo">
            <ul>
                <li><img src="home.png"></li>
                <li><img src="inbox.png"></li>
            </ul>
        </div>
        <div class="nav-right">

            <div class="search-box">
                <img src="search.png">
                <input type="text" placeholder="Search"> 
            </div>
            <div class="nav-user-icon online">
                <img src="profile.png">
            </div>
        </div>
    </nav>

    <div class="container">
        <h2>Student Information Form</h2>
        <form action="inserts.php" method="POST">
            <div class="form-columns">
                <div class="column left-column">
                    <div class="form-group">
                        <label for="first_name">First Name:</label>
                        <input type="text" id="first_name" name="first_name" required>
                    </div>
                    <div class="form-group">
                        <label for="middle_name">Middle Name:</label>
                        <input type="text" id="middle_name" name="middle_name">
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last Name:</label>
                        <input type="text" id="last_name" name="last_name" required>
                    </div>
                    <div class="form-group">
                        <label for="age">Age:</label>
                        <input type="number" id="age" name="age" required>
                    </div>
                </div>
                <div class="column right-column">
                    <div class="form-group">
                        <label for="contact_number">Contact Number:</label>
                        <input type="text" id="contact_number" name="contact_number" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="textarea">Educational Background:</label>
                        <textarea id="textarea" name="textarea" rows="4" cols="50"></textarea>
                    </div>
                </div>
            </div>
            <button type="submit" name="submit" value="submit">Submit</button>
        </form>
    </div>
</body>
</html>