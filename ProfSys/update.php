<?php
include 'connection.php';

if(isset($_POST['submit'])){
    // Retrieve the form data
    $p_id = $_POST['p_id'];
    $first_name = $_POST["first_name"];
    $middle_name = $_POST["middle_name"];
    $last_name = $_POST["last_name"];
    $age = $_POST["age"];
    $contact_number = $_POST["contact_number"];
    $address = $_POST["address"];
    $email = $_POST["email"];
    $educational_background = $_POST["textarea"];
    
    // Handle image upload
    $filename = $_FILES["img"]["name"];
    $tmp_name = $_FILES["img"]["tmp_name"];
    $img_destination = "uploads/".$filename;
    move_uploaded_file($tmp_name, $img_destination);

    // Update the record in the database
    $sql_query = "UPDATE `profs` SET `first_name`='$first_name', `mid_name`='$middle_name', `last_name`='$last_name', `age`='$age', `contact_num`='$contact_number', `address`='$address', `email`='$email', `educ`='$educational_background', `img`='$img_destination' WHERE prof_id = '$p_id'";

    if ($conn->query($sql_query) === TRUE){
        echo "<script>alert('UPDATE SUCCESSFUL');</script>";
        echo "<script>window.location.assign('list.php')</script>";
    } else {
        echo "Error updating record: " . $conn->error;
    }
} else {
    // Retrieve the existing record's data
    if(isset($_GET['p_id'])){
        $p_id = $_GET['p_id'];
        $sql = "SELECT * FROM `profs` WHERE prof_id = '$p_id'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
        } else {
            echo "<script>alert('Record not found!');</script>";
            echo "<script>window.location.assign('list.php')</script>";
        }
    }
}
?>