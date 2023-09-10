<?php 
session_start();

$conn = new mysqli("localhost", "root", "", "dummy_db");
if(!$conn)
die("Database Connection Failed");
$username = addslashes($conn->real_escape_string($_POST['username']));
$password = md5($conn->real_escape_string($_POST['password']));

$stmt = $conn->prepare("SELECT * FROM `users` where `username` = ? and `password` = ?");
$stmt->bind_param('ss', $username, $password);
$stmt->execute();
$result = $stmt->get_result();
if($result->num_rows > 0){
    $data = $result->fetch_assoc();
    foreach($data as $k => $v){
        $_SESSION['login_'.$k] = $v;
    }
    /**
     * Saving the input data to Cookie
     */
    if(isset($_POST['rememberMe'])){
        /**
         * Store Login Credential
         */
        setcookie('username', $_POST['username'], ( time() + ((365 * 24 * 60 * 60) *3) ));
        setcookie('password', $_POST['password'], ( time() + ((365 * 24 * 60 * 60) *3) ));
    }else{
        /**
         * Delete Login Credential
         */
        setcookie('username', $_POST['username'], ( time() - (24 * 60 * 60) ));
        setcookie('password', $_POST['password'], ( time() - (24 * 60 * 60) ));
    }
    echo "<script>location.replace('./welcome.php')</script>";
}else{
    echo "<script>alert('Username and Password does not match.'); location.replace('./')</script>";
}

?>