<?php
    include "connection.php";

    if(isset($_GET['p_id'])){
        $id = $_GET['p_id'];
        $sql_query = "DELETE FROM profs WHERE prof_id = '$id'";
            if ($conn->query($sql_query) === TRUE){
                echo "<script>window.alert('SUCCESSFULLY DELETED!!');</script>";
                echo    "<script>window.location.assign('../list.php')</script>";
            }else{
                echo "<script>window.alert('DELETION DENIED!!');</script>";
            }
    }

?>