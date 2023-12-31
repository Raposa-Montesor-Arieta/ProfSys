<?php
include "connection.php";

if (isset($_POST['submit'])) {
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

    // Validate the email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) || strpos($email, "@gmail.com") === false) {
        echo "<script>alert('Invalid email format. Please use a valid Gmail address.'); </script>";
        echo "<script>window.location.assign('../form.php')</script>";
        exit; // Prevent further execution
    }

    // Validate the contact number to contain only numbers
    if (!is_numeric($contact_number)) {
        echo "<script>alert('Invalid contact number. Please enter only numeric digits.'); </script>";
        echo "<script>window.location.assign('../form.php')</script>";
        exit; // Prevent further execution
    }

    // Handling image upload
    $img_name = $_FILES['img']['name'];
    $img_tmp = $_FILES['img']['tmp_name'];
    $img_dir = "../uploads/"; // Specify your image upload directory
    $img_path = $img_dir . $img_name;

    // Check if the file was uploaded successfully
    if (is_uploaded_file($img_tmp)) {
        if (move_uploaded_file($img_tmp, $img_path)) {
            // Image uploaded successfully, proceed with database insert

            // SQL statement to insert data with the image
            $sql = "INSERT INTO `profs`(`first_name`, `mid_name`, `last_name`, `age`, `contact_num`, `specialization`, `address`, `email`, `img`, `educ`, `experience`) 
            VALUES ('$first_name','$middle_name','$last_name','$age','$contact_number', '$special', '$address','$email', '$img_name', '$educational_background', '$work')";

            if ($conn->query($sql) === TRUE) {
                echo "<script>alert('CREATED SUCCESSFULLY'); </script>";
                echo "<script>window.location.assign('../list.php')</script>";
            } else {
                echo "<script>alert('Error: " . $conn->error . "');</script>";
                echo "<script>window.location.assign('../form.php')</script>";
            }
        } else {
            echo "<script>alert('Error moving uploaded image to directory'); </script>";
            echo "<script>window.location.assign('../form.php')</script>";
        }
    } else {
        echo "<script>alert('Error uploading image'); </script>";
        echo "<script>window.location.assign('../form.php')</script>";
    }
}
?>
