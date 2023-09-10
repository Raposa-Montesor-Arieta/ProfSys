<?php 
session_start();
if(strstr($_SERVER['PHP_SELF'], "log-in.php") === false){
    if(!isset($_SESSION['login_id'])){
        header("location: ././log-in.php");
    }
}
if(strstr($_SERVER['PHP_SELF'], "home.php") === false){
    if(isset($_SESSION['login_id'])){
        header("location: ././home.php");
    }
}
?>