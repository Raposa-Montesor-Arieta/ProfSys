<?php
session_start();
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
            <ul>
                <li><img src="image/home.png"></li>
                <li><img src="image/inbox.png"></li>
            </ul>
        </div>
        <div class="nav-right">

            <div class="search-box">
            <!-- WELCOME:&nbsp;<?= $_SESSION['login_username'] ?> -->
                <input type="text" value="Search here..." >    
            </div>
            <div class="nav-user-icon online">
            Welcome&nbsp;<?= $_SESSION['login_username'] ?>!
                <!-- <img src="image/profile.jpg"> -->
                <a class="btn btn-sm btn-danger rounded-pill col-lg-4 col-md-6 col-sm-12" href="logout.php">Logout</a>
            </div>
        </div>
    </nav>

    <?php
        $p_id = $_GET['p_id'];
        $sql_query = "SELECT * FROM profs WHERE prof_id = '$p_id'";

        $result = $conn -> query($sql_query);
        while($row = $result -> fetch_assoc()){
        $p_id = $row['prof_id'];
        
        ?>

    <form action="functions/update.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" value="<?php echo $row['prof_id'];?>" class="form-control" placeholder="Enter your middle name" name="p_id">
    <div class="container-box">
        <h2>Professor Information Form</h2>
        <div class="form-columns">
            <div class="column">
                <div class="form-group">
                    <label for="first_name">First Name:</label>
                    <input type="text" id="first_name" name="first_name" required
                    value="<?php echo $row['first_name'];?>">
                </div>
                <div class="form-group">
                    <label for="middle_name">Middle Name:</label>
                    <input type="text" id="middle_name" name="middle_name"
                    value="<?php echo $row['mid_name'];?>">
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name:</label>
                    <input type="text" id="last_name" name="last_name" required
                    value="<?php echo $row['last_name'];?>">
                </div>
                <div class="form-group">
                    <label for="age">Age:</label>
                    <input type="number" id="age" name="age" required
                    value="<?php echo $row['age'];?>" >
                    <br>
                </div>
                <div class="form-group">
                    <label for="contact_number">Contact Number:</label>
                    <input type="number" id="contact_number" maxlength="11" max="9999999999" min="9999999999" name="contact_number" required value="<?php echo $row['contact_num'];?>">
                </div>
                <div class="form-group">
                    <label for="textarea">Specialization:</label>
                    <textarea id="specialization" name="specialization" rows="4" cols="50"><?php echo $row['specialization']; ?></textarea>
                </div>
            </div>
            <div class="column">
                <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" id="address" name="address" required
                    value="<?php echo $row['address'];?>">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required
                    value="<?php echo $row['email'];?>">
                </div>
                <div class="form-group">
                <label for="file_upload">Uploaded Image:</label>
                        <input type="file" id="file_upload" name="img" accept="image/*">
                        <!-- Hidden input to store the current image URL -->
                        <input type="hidden" name="current_img" value="<?php echo $row['img']; ?>">
                </div>
                <div class="form-group">
                    <label for="textarea">Educational Attainment:</label>
                    <textarea id="textarea" name="textarea" rows="4" cols="50"><?php echo $row['educ']; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="textarea">Educational Attainment:</label>
                    <textarea id="work_experience" name="work_experience" rows="4" cols="50"><?php echo $row['experience']; ?></textarea>
                </div>
            </div>
        </div>
        <button type="submit" name="submit" value="submit">Submit</button>
    </div>
</form>
<?php
}
?>