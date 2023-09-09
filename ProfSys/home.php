<?php
include 'functions/connection.php';

$query = "SELECT * FROM profs";
    $result = mysqli_query($conn, $query);

    // Get the number of rows returned by the query
    $num_rows = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Giga:wght@100;300&display=swap" rel="stylesheet">
    <title>Home</title>
</head>
<body>

    <nav>
        <div class="nav-left">
            <img src="image/logo.png" class="logo">
            <ul>
                <a href="#"><li><img src="image/home.png"></li></a>
                <a href="list.php"><li><img src="image/inbox.png"></li></a>
            </ul>
        </div>
        <div class="nav-right">

            <div class="search-box">
                <img src="image/search.png">
                <input type="text" placeholder="Search"> 
            </div>
            <div class="nav-user-icon online">
                <!-- <img src="image/profile.jpg"> -->
                <a class="text-decoration-none" href="log-in.php"><p>Log-In</p></a>
            </div>
        </div>
    </nav>
    <div class="contain">
    <div class="left_img">
        <img src="image/bg.png">
        <div class="head">
            <h1>ACADEMIC <br> EXCELLENCE</h1>
            <p>One-on-One Path<br>to Success</p>
        </div>
    </div>
</div><br>
    <div class="line1"></div><br><br>
    <div class="container">
    <div class="nums">
        <h1>
            BOOK YOUR TUTOR NOW!
        </h1>
    </div><br><br><br>
    <div class="butt_container">
    <a href="list.php" class="button-link">
    <div class="box1 button">
        <h2>Professors Available</h2>
        <h1><?php echo $conn->query("SELECT * FROM profs where status = 1 ")->num_rows ?></h1>
    </div>
</a>
<a href="list.php" class="button-link">
    <div class="box1 button">
        <h2>Professors Available</h2>
        <h1><?php echo $conn->query("SELECT * FROM profs where status = 1 ")->num_rows ?></h1>
    </div>
</a>
<a href="list.php" class="button-link">
    <div class="box1 button">
        <h2>Professors Available</h2>
        <h1><?php echo $conn->query("SELECT * FROM profs where status = 1 ")->num_rows ?></h1>
    </div>
</a>
</div>

</div>
    
  