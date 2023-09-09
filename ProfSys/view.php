<?php
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
    <link rel="stylesheet" href="profcss/form.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="profcss/view.css">
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
            <img src="image/search.png">
            <input type="text" placeholder="Search"> 
        </div>
        <div class="nav-user-icon online">
            <img src="image/profile.jpg">
        </div>
    </div>
</nav>

<div class="resume-container">
    <div class="top-right">
        <img src="image/logo.png">
    </div><br><br><br><br>
   
         <img src="uploads/<?php echo $row['img'];?>" alt="Professor Image" style="width: 150px; height: 150px; border-radius: 50%; object-fit: cover; border: 2px solid #001;">
         <div class="border"></div>
    <!-- Name -->
    <div class="content-area" value="<?php echo $row['prof_id'];?>">
        <h1><?php echo $row['first_name'];?></h1>&nbsp;
        <h1><?php echo $row['mid_name'];?>&nbsp;
        <h1><?php echo $row['last_name'];?></h1>&nbsp;
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

