<?php 
session_start();
if(strstr($_SERVER['PHP_SELF'], "index.php") === false){
    if(!isset($_SESSION['login_id'])){
        header("location: ./");
    }
}
if(strstr($_SERVER['PHP_SELF'], "welcome.php") === false){
    if(isset($_SESSION['login_id'])){
        header("location: ./welcome.php");
    }
}
?>