<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST['email'];
    $b = $_POST['contact'];
    $c = md5($_POST['password']);

    $qry = mysqli_query($con, "UPDATE admin SET a_password='$c' WHERE a_email = '$a' and a_contact = '$b' ");

    if ($qry == true) {
        header("location:login.php");
    } else {
        echo "Not inserted" . mysqli_error($con);
    }
} else {
    echo "Request method is not POST";
}

?>