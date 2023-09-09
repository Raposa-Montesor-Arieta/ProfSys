<?php
include 'connection.php';

if (isset($_POST['submit'])) {
    // Retrieve the form data
    $p_id = $_POST['p_id'];
    $first_name = $_POST["first_name"];
    $middle_name = $_POST["middle_name"];
    $last_name = $_POST["last_name"];
    $age = $_POST["age"];
    $contact_number = $_POST["contact_number"];
    $special = $_POST["specialization"];
    $address = $_POST["address"];
    $email = $_POST["email"];
    $educational_background = $_POST["textarea"];
    $work = $_POST["work_experience"];

    // Initialize $img_destination
    $img_destination = "";

    // Check if a new image was selected
    if (!empty($_FILES["img"]["name"])) {
        // Handle image upload as before
        $filename = $_FILES["img"]["name"];
        $tmp_name = $_FILES["img"]["tmp_name"];

        // Define the destination path relative to the "ProfSys" directory
        $upload_directory = "../uploads/"; // Updated path

        // Ensure the directory exists
        if (!is_dir($upload_directory)) {
            mkdir($upload_directory, 0755, true);
        }

        $img_destination = $upload_directory . $filename;

        // Debugging: Output destination path
       

        if (move_uploaded_file($tmp_name, $img_destination)) {
            // File successfully uploaded
        } else {
            // Error occurred while moving the file
            echo "Error moving file: " . $_FILES["img"]["error"];
        }
    } else {
        // No new image selected, use the current image URL from the hidden input
        $img_destination = $_POST["current_img"];
    }

    // Update the record in the database
    $sql_query = "UPDATE `profs` SET `first_name`='$first_name', `mid_name`='$middle_name', `last_name`='$last_name', `age`='$age', `contact_num`='$contact_number', `specialization`='$special', `address`='$address', `email`='$email', `educ`='$educational_background', `experience`='$work', `img`='$img_destination' WHERE prof_id = '$p_id'";

    if ($conn->query($sql_query) === TRUE) {
        echo "<script>alert('UPDATE SUCCESSFUL');</script>";
        echo "<script>window.location.assign('../list.php')</script>";
    } else {
        echo "Error updating record: " . $conn->error;
    }
} else {
    // Retrieve the existing record's data
    if (isset($_GET['p_id'])) {
        $p_id = $_GET['p_id'];
        $sql = "SELECT * FROM `profs` WHERE prof_id = '$p_id'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
        } else {
            echo "<script>alert('Record not found!');</script>";
            echo "<script>window.location.assign('../list.php')</script>";
        }
    }
}
?>
