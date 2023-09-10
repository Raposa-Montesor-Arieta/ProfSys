<?php
    include "connection.php";

            $p_id = $_GET['p_id'];
            if (isset($_GET['submit'])) {
                                 
                if (isset($_POST['submit'])) { // Handle the update or insert action
                    $first_name = $_POST["first_name"];
                    $middle_name = $_POST["middle_name"];
                    $last_name = $_POST["last_name"];
                    $age = $_POST["age"];
                    $contact_number = $_POST["contact_number"];
                    $special = $_POST ["specialization"];
                    $address = $_POST["address"];
                    $email = $_POST["email"];
                    $educational_background = $_POST["textarea"];
                    $work = $_POST["work_experience"];

                $filename = htmlspecialchars (basename($_FILES["img"]["name"]));

                $student_query = "SELECT * FROM profs WHERE prof_id ='$p_id'";
                $student_query_run = mysqli_query($conn, $student_query);
                foreach($student_query_run as $stud_row)
                {
                    // echo $stud_row['image'];
                    if($filename == NULL)
                    {
                        // UPDATE WITH EXISTING IMAGE
                        $image_data = $stud_row['img'];
                    }
                    else 
                    {
                        // UPDATE WITH NEW IMAGE AND DELETE WITH OLD IMAGE
                        if($img_path = "uploads/".$stud_row['img'])
                        {
                            unlink($img_path);
                            $image_data = $filename;
                        }
                        
                    }
                }
                

            mysqli_query($conn," UPDATE `profs` SET `first_name`='$first_name', `mid_name`='$middle_name', `last_name`='$last_name', `age`='$age', `contact_num`='$contact_number', `address`='$address', `email`='$email', `img`='$target_file', `educ`='$educational_background' WHERE prof_id = '$p_id' ");
            
            $result=mysqli_query($conn,"SELECT * FROM profs");
            $row=mysqli_num_rows($result);

            if($result)
            {
                if($filename == NULL)
                {
                    // UPDATE WITH EXISTING IMAGE
                    echo "<script>window.alert('Student Record Successfully Added!'); </script>";
                    echo "<script>window.location.assign('list.php');</script>";
                }
                else 
                {
                    // UPDATE WITH NEW IMAGE AND DELETE WITH OLD IMAGE
                    move_uploaded_file($_FILES["img"]["tmp_name"],"uploads/" . $_FILES["img"]["name"]);
                    echo "<script>window.alert('Professor Record Successfully Added!'); </script>";
                    echo "<script>window.location.assign('list.php');</script>";
                } 
                // echo "<script>alert('Student Record Successfully Updated!'); window.location.assign('students2.php'); </script>";
            }
            else 
            {
            $_SESSION['status'] = "Student Record Failed to Update";
            header('Location: students.php');
            }
        }
    }