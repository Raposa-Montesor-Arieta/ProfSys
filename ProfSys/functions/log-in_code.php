<?php
// session_start();

// if (isset($_SESSION['id'])) {
//     // header("Location: ../list.php");
//     exit(); // Exit to prevent further execution
// }

// // Include database connectivity
// include_once('connection1.php');

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $username = $_POST["Username"];
//     $password = $_POST["Password"];

//     // Query the database to check if the username and password combination exists
//     $sql = "SELECT * FROM log_in WHERE Username = ? AND Password = ?";
//     $stmt = $conn->prepare($sql);
//     $stmt->bind_param("ss", $username, $password);
//     $stmt->execute();
//     $result = $stmt->get_result();

//     if ($result) {
//         if ($result->num_rows == 1) {
//             $row = $result->fetch_assoc();
            
//             // Password is correct, log in the user
//             $_SESSION['id'] = $row['id'];
//             $_SESSION['Username'] = $row['Username'];
//             header("Location: ../list.php");
//             exit(); // Exit to prevent further execution
//         } else {
//             echo "Incorrect username or password";
//         }
//     } else {
//         // Print the database error for debugging
//         echo "Database error: " . $conn->error;
//     }
// }

// <-->


// if (isset($_SESSION['id'])) {
//     header("Location: ../list.php");
//     exit();
// }

// include("connection1.php");

// if (isset($_POST['submit'])) {
//     $errorMsg = "";

//     $user = mysqli_real_escape_string($conn, $_POST['Username']);
//     $password = mysqli_real_escape_string($conn, $_POST['Password']);

//     if (!empty($user) && !empty($password)) {
//         $query = "SELECT * FROM log_in WHERE Username = '$user'";
//         $result = mysqli_query($conn, $query);

//         if ($result) {
//             if (mysqli_num_rows($result) == 1) {
//                 $row = mysqli_fetch_assoc($result);

//                 if ($password === $row['Password']) {
//                     $_SESSION["Username"] = $user;
//                     $_SESSION["login"] = true;
//                     $_SESSION["id"] = $row["id"];
//                     header("Location: ../list.php");
//                     exit();
//                 } else {
//                     echo "<script>window.alert('Wrong Password!');</script>";
//                     echo "<script>window.location.replace('../log-in.php');</script>";
//                 }
//             } else {
//                 echo "<script>window.alert('Username Not Found!');</script>";
//                 echo "<script>window.location.replace('../log-in.php');</script>";
//             }
//         } else {
//             echo "<script>window.alert('An error occurred. Please try again later.');</script>";
//             echo "<script>window.location.replace('../log-in.php');</script>";
//         }
//     } else {
//         echo "<script>window.alert('Username and Password are required!');</script>";
//         echo "<script>window.location.replace('../log-in.php');</script>";
//     }
// }

// <-->

session_start();

$conn = new mysqli("localhost", "root", "", "rental");
if(!$conn)
die("Database Connection Failed");
$username = addslashes($conn->real_escape_string($_POST['Username']));
$password = md5($conn->real_escape_string($_POST['Password']));

$stmt = $conn->prepare("SELECT * FROM `log_in` where `Username` = ? and `Password` = ?");
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
        setcookie('username', $_POST['Username'], ( time() + ((365 * 24 * 60 * 60) *3) ));
        setcookie('password', $_POST['Password'], ( time() + ((365 * 24 * 60 * 60) *3) ));
    }else{
        /**
         * Delete Login Credential
         */
        setcookie('username', $_POST['Username'], ( time() - (24 * 60 * 60) ));
        setcookie('password', $_POST['Password'], ( time() - (24 * 60 * 60) ));
    }
    echo "<script>location.replace('../home.php')</script>";
}else{
    echo "<script>alert('Username and Password does not match.'); location.replace('./')</script>";
}

?>


<!-- ->

// session_start();

// if (isset($_SESSION['id'])) {
//     header("Location: ../list.php");
//     exit();
// }

// include("connection1.php");

// if (isset($_POST['submit'])) {
//     $errorMsg = "";

//     $username = mysqli_real_escape_string($conn, $_POST['Username']);
//     $password = mysqli_real_escape_string($conn, $_POST['Password']);

//     if (!empty($username) && !empty($password)) {
//         $query = "SELECT * FROM log-in WHERE `Username` = '$username'";
//         $result = mysqli_query($conn, $query);

//         if ($result) {
//             $row = mysqli_fetch_assoc($result);
            
//             if ($row) {
//                 if ($password === $row['Password']) {
//                     $_SESSION["Username"] = $username;
//                     $_SESSION["login"] = true;
//                     $_SESSION["id"] = $row["id"];
//                     header("Location: ../list.php");
//                     exit();
//                 } else {
//                     echo "<script>window.alert('Wrong Password!');</script>";
//                     echo "<script>window.location.replace('../log-in.php');</script>";
//                 }
//             } else {
//                 echo "<script>window.alert('Username not found in the database!');</script>";
//                 echo "<script>window.location.replace('../log-in.php');</script>";
//             }
//         } else {
//             echo "<script>window.alert('Database Error!');</script>";
//             echo "<script>window.location.replace('../log-in.php');</script>";
//         }
//     } else {
//         echo "<script>window.alert('Username and Password are required!');</script>";
//         echo "<script>window.location.replace('../log-in.php');</script>";
//     }
// }



?>



