<?php
include 'connection.php';

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
    <link rel="stylesheet" href="profcss/style.css">
    <title>Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .resume-container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .profile-picture {
            max-width: 150px;
            border-radius: 50%;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .section-heading {
            font-size: 20px;
            margin-top: 20px;
        }

        .section-content {
            margin-top: 10px;
        }

        /* Add more styling as needed */

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
    <!-- Profile Picture -->
    <img class="profile-picture" src="image/profile.jpg" alt="Profile Picture">

    <!-- Name -->
    <div class="content-area" value="<?php echo $row['prof_id'];?>">
    <h1><?php echo $row['first_name'];?></h1>
    <h3><?php echo $row['last_name'];?></h3>

    <!-- Contact Information -->

    <!-- Add more sections as needed -->

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

