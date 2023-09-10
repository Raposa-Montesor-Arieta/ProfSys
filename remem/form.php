<?php
include 'functions/connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Form</title>
</head>
<body>

    <nav>
        <div class="nav-left">
            <img src="image/logo.png" class="logo">
            <!-- <ul>
                <li><img src="image/home.png"></li>
                <li><img src="image/inbox.png"></li>
            </ul> -->
        </div>
        <div class="nav-right">

            <div class="search-box">
                <img src="image/search.png">
                <input type="text" placeholder="Search"> 
            </div>
            <div class="nav-user-icon online">
                <img src="image/profile.jpg">
            </div>
        </div>
    </nav>
    <form action="functions/inserts.php" method="POST" enctype="multipart/form-data">
    <div class="container-box">
        <h2>Professor Information Form</h2>
        <div class="form-columns">
            <div class="column">
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
                <div class="form-group">
                    <label for="contact_number">Contact Number:</label>
                    <input type="number" id="contact_number" maxlength="11" max="9999999999" name="contact_number" required>
                </div>
                <div class="form-group">
                    <label for="specialization">Specialization:</label>
                    <textarea id="specialization" name="specialization" rows="4" cols="50"></textarea>
                </div>
            </div>
            <div class="column">
                <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" id="address" name="address" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="file_upload">Upload Picture:</label>
                    <input type="file" id="file_upload" name="img" accept="image/*" required>
                </div>
                <div class="form-group">
                    <label for="textarea">Educational Attainment:</label>
                    <textarea id="textarea" name="textarea" rows="4" cols="50"></textarea>
                </div>
                <div class="form-group">
                    <label for="work_experience">Work Experience:</label>
                    <textarea id="work_experience" name="work_experience" rows="4" cols="50"></textarea>
                </div>
            </div>
        </div>
        <button type="submit" name="submit" value="submit">Submit</button>
    </div>
</form>
</body>
</html>
