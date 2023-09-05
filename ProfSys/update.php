<?php
    include "connection.php";

    if(isset($_POST['submit'])){

        $p_id = $_POST['prof_id'];
        $first_name = $_POST["first_name"];
        $middle_name = $_POST["middle_name"];
        $last_name = $_POST["last_name"];
        $age = $_POST["age"];
        $contact_number = $_POST["contact_number"];
        $address = $_POST["address"];
        $email = $_POST["email"];
        $educational_background = $_POST["textarea"];
            
        $filename = htmlspecialchars (basename($_FILES["img"]["name"]));

        $sql_query = "UPDATE `profs` SET `first_name`=' $first_name',`mid_name`='$middle_name',`last_name`='$last_name',`age`='$age',`contact_num`='$contact_number',`address`='$address',`email`='$email',`img`='$img_name',`educ`='$educational_background'
        WHERE prof_id = '$p_id'";

        if ($con -> query($sql_query) === TRUE){
            
            echo "<script>alert('UDATE SUCCESSFUL'); </script>";
            echo "<script>window.location.assign('normal-tables.php')</script>" ;
        }
    }

?>