<?php
    include "connection.php";

if(isset($_POST['submit'])){
    $first_name = $_POST["first_name"];
    $middle_name = $_POST["middle_name"];
    $last_name = $_POST["last_name"];
    $age = $_POST["age"];
    $contact_number = $_POST["contact_number"];
    $email = $_POST["email"];
    $educational_background = $_POST["textarea"];

    $sql = "INSERT INTO `profs`(`first_name`, `mid_name`, `last_name`, `age`,`contact_num`, `email`, `educ`) 
    VALUES ('$first_name','$middle_name','$last_name','$age','$contact_number','$email', '$educational_background')";


    $conn -> query($sql) or die ($conn->error);
    echo header("Location: normal-tables.php");
}
?>