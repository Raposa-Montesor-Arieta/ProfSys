<?php
include 'connection.php';

$query = "SELECT * FROM profs";
    $result = mysqli_query($conn, $query);

    // Get the number of rows returned by the query
    $num_rows = mysqli_num_rows($result);
?>
<?php require_once("functions/auth.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Giga:wght@100;300&display=swap" rel="stylesheet">
    <title>Home</title>
</head>
<body>

    <nav>
        <div class="nav-left">
            <img src="logo.png" class="logo">
            <ul>
                <a href="#"><li><img src="home.png"></li></a>
                <a href="list.php"><li><img src="inbox.png"></li></a>
            </ul>
        </div>
        <div class="nav-right">

            <div class="search-box">
            WELCOME:&nbsp;<?= $_SESSION['login_username'] ?>
            </div>
            <div class="nav-user-icon online">
                <!-- <img src="image/profile.jpg"> -->
                <a class="btn btn-sm btn-danger rounded-pill col-lg-4 col-md-6 col-sm-12" href="functions/logout.php">Logout</a>
            </div>
        </div>
    </nav>
    <div class="contain">
    <div class="left_img">
        <img src="bg.png">
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
<br><br><br>
    <div class="line1"></div>
    <div class="image2">
        <img src="bg1.png">
            <div class="head1">
                <h1>Connecting Knowledge<br> Seekers with Expert Professors</h1>
                <h2>Empowering Education Online</h2>
            </div>
    </div>
    
    <div class="line1"></div>
    <div class="contain">
        
    </div>
</div>
</div>
    
  