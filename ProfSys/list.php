<?php
include 'functions/connection.php';

// Fetch data from the database
$sql = "SELECT prof_id, first_name, last_name, age, email, contact_num FROM profs";
$result = $conn->query($sql);

// Create an array to store the data
$data = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/view.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <style>
    /* Set a more compressed fixed width for the table */
    table {
        width: 10%; /* Adjust this value as needed */
        margin: 0 auto; /* Center the table on the page */
    }

    th, td {
        border: 1px solid #ddd;
        padding: 6px; /* Reduced padding */
        text-align: left;
    }

    th {
        background-color: #fff;
    }
    .contain{
        width: 1000px;
        margin: 70px auto;
        background-color: #fff;
    }

    /* Reduce font size for the table content */
    table {
        font-size: 16px; /* You can adjust this value as needed */
    }

    /* Optional: Add responsive design for small screens */
    @media (max-width: 768px) {
        table {
            font-size: 12px;
        }
    }
    .action-button {
            padding: 5px 10px;
            background-color: #007BFF;
            color: #fff;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            margin-right: 5px;
            cursor: pointer; /* Add a pointer cursor */
        }

        .action-button.edit {
            background-color: #28A745;
        }

        .action-button.delete {
            background-color: #DC3545;
        }

</style>


    <title>List</title>
</head>
<body>
    
    <nav>
        <div class="nav-left">
            <img src="image/logo.png" class="logo">
            <ul>
                <a href="home.php"><li><img src="image/home.png"></li></a>
                <a href="#"><li><img src="image/inbox.png"></li></a>
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
    <div class="contain">
        <table id="professorsTable" class="display">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Age</th>
                    <th>Email</th>
                    <th>Contact Number</th>
                    <th>Actions</th> <!-- Add the "Actions" column header -->
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($data as $row) {
                    echo "<tr>";
                    echo "<td>{$row['prof_id']}</td>";
                    echo "<td>{$row['first_name']}</td>";
                    echo "<td>{$row['last_name']}</td>";
                    echo "<td>{$row['age']}</td>";
                    echo "<td>{$row['email']}</td>";
                    echo "<td>{$row['contact_num']}</td>";
                    echo "<td>";
                    echo '<a href="edit.php?p_id='.$row['prof_id'].'" class="action-button edit" >Edit</a>';// Styled Edit button
                    echo "<a href='functions/delete.php?p_id={$row['prof_id']}' class='action-button delete' data-toggle='modal' data-target='#deleteModal'>Delete</a>";
                    echo "<a href='view1.php?id={$row['prof_id']}' class='action-button view'>View</a>"; // Styled View button
                    echo "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        <a href="form.php?" class="action-button view">Add Professor</a>
    </div>

    <script>
        $(document).ready(function() {
            $('#professorsTable').DataTable();
        });

        
    </script>


</body>
</html>
