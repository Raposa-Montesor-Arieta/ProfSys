<?php
session_start();
include 'functions/connection.php';

// Check if 'p_id' parameter exists in the URL
if (isset($_GET['id'])) {
    $p_id = $_GET['id'];
    $sql_query = "SELECT * FROM profs WHERE prof_id = '$p_id'";

    $result = $conn->query($sql_query);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/view1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Giga:wght@100;300&display=swap" rel="stylesheet">
    <title>View</title>
    <style>
       

    </style>
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
        <a class="btn btn-sm btn-danger rounded-pill col-lg-4 col-md-6 col-sm-12" href="logout.php">Logout</a>
        </div>
    </div>
</nav>

<div class="resume">
        <div class="left">
            <img src="uploads/<?php echo $row['img'];?>" alt="Professor Image" style="width: 150px; height: 150px; border-radius: 50%; object-fit: cover; border: 2px solid #001;">
            <h2><?php echo $row['first_name'] . ' ' . $row['mid_name'] . ' ' . $row['last_name'];?></h2>
            <ul><br>
                <li>Email: <?php echo $row['email'];?></li><br>
                <li>Phone: <?php echo $row['contact_num'];?></li><br>
                <li>Address: <?php echo $row['address'];?></li>
            </ul>
        </div>
        <div class="right">
            <h2>Educational Background</h2>
            <p><?php echo $row['educ'];?></p>
            
            <h2>Specialization</h2>
            <p><?php echo $row['specialization'];?></p>
            
            <h2>Work Experience</h2>
            <p><?php echo $row['experience'];?></p>
            
        </div>
    </div>
    
</div>
<?php
        }
    }
} else {
    // Handle the case where 'p_id' is not provided in the URL
    echo "Professor ID ('p_id') not provided in the URL.";
}
?>
</body>
</html>

