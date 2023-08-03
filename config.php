<?php
define("servername", "localhost");
define("username", "root");
define("password", "");
define("dbname", "grievance");

$con = mysqli_connect(servername, username, password) or die(mysqli_error($con));
mysqli_select_db($con, dbname) or die(mysqli_error($con));

?>