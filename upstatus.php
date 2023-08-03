<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST['id'];
    $b = $_POST['status'];

    $qry = mysqli_query($con, "UPDATE student SET s_status='$b' WHERE s_id = '$a'");

    if ($qry == true) {
        header("location:search.php");
    } else {
        echo "Not inserted" . mysqli_error($con);
    }
} else {
    echo "Request method is not POST";
}

?>