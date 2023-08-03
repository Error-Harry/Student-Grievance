<?php
session_start();
include("config.php");
if (isset($_SESSION['login_user'])) {

    header("location:search.php");
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $myusername = $_POST['username'];
    $mypassword = $_POST['password'];
    $password = md5($mypassword);
    $sql = "SELECT a_id FROM admin WHERE a_username = '$myusername' and a_password ='$password'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
        $_SESSION["login_user"] = $myusername;
        header("location:search.php");
    } else {
        echo "Your Email or Password is Invalid";
    }
}

?>