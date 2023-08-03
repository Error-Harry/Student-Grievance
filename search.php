<?php
include("lock.php");
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Search Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
        a {
            text-decoration: none;
            color: white;
        }
    </style>
</head>

<body>
    <nav class="nav justify-content-center border border-success bg-dark p-2">
        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link text-white" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" aria-current="page" href="form.php">Grievance Form</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="login.php">Login</a>
            </li>
        </ul>
        <form class="d-flex mx-1" action="" method="POST" role="search">
            <input class="form-control me-2" type="search" name="search" placeholder="Department" aria-label="Department">
            <input class="form-control me-2" type="search" name="search1" placeholder="Year" aria-label="Year">
            <input class="form-control me-2" type="search" name="search2" placeholder="Grievance Type" aria-label="Grievance Type">
            <input class="form-control me-2" type="search" name="search3" placeholder="Grievance status" aria-label="Grievance status">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <button type="" class="btn btn-success mx-2"><a href="status.php">Update Status</a></button>
        <button type="" class="btn btn-danger mx-2"><a href="logout.php">Logout</a></button>
    </nav>

    <?php
    require_once("config.php");
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $search = $_POST["search"];
        $search1 = $_POST["search1"];
        $search2 = $_POST["search2"];
        $search3 = $_POST["search3"];
        $qry = mysqli_query($con, "SELECT * FROM student WHERE s_department LIKE '%$search%' AND s_year LIKE '%$search1%' AND s_type LIKE '%$search2%' AND s_status LIKE '%$search3%' ");

        echo '<table class="table table-striped table-dark margincolor mt-3"">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Department</th>
                    <th>Year</th>
                    <th>Div</th>
                    <th>Roll No</th>
                    <th>Contact</th>
                    <th>Email</th>
                    <th>Is</th>
                    <th>Grievance Type</th>
                    <th>Status</th>
                    <th>Subject</th>
                    <th>Description</th>
                </tr>';

        while ($row = mysqli_fetch_array($qry)) {
            echo "<tr>";
            echo "<td>" . $row['s_id'] . "</td>";
            echo "<td>" . $row['s_name'] . "</td>";
            echo "<td>" . $row['s_department'] . "</td>";
            echo "<td>" . $row['s_year'] . "</td>";
            echo "<td>" . $row['s_div'] . "</td>";
            echo "<td>" . $row['s_roll_no'] . "</td>";
            echo "<td>" . $row['s_contact'] . "</td>";
            echo "<td>" . $row['s_email'] . "</td>";
            echo "<td>" . $row['s_is'] . "</td>";
            echo "<td>" . $row['s_type'] . "</td>";
            echo "<td>" . $row['s_status'] . "</td>";
            echo "<td>" . $row['s_complaint_about'] . "</td>";
            echo "<td>" . $row['s_complaint_description'] . "</td>";
        }

        echo '</table>';
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>