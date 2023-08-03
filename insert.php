<?php
include("config.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $a = $_POST['name'];
    $b = $_POST['department'];
    $c = $_POST['year'];
    $d = $_POST['div'];
    $e = $_POST['rno'];
    $f = $_POST['contact'];
    $g = $_POST['email'];
    $h = $_POST['is'];
    $i = $_POST['gtype'];
    $j = $_POST['status'];
    $k = $_POST['cabout'];
    $l = $_POST['cdescription'];

    $qry = mysqli_query($con, "INSERT INTO student (s_name, s_department, s_year, s_div, s_roll_no, s_contact, s_email, s_is, s_type, s_status, s_complaint_about, s_complaint_description) VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j', '$k', '$l')");

    if ($qry == true) {
        header("location:thankyou.php");
    } else {
        echo "NOPE" . mysqli_error($con);
    }
} else {
    echo "The REQUEST is not POST";
}
?>