<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forgot Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
        main {
            height: 687px;
        }
    </style>
</head>

<body>
    <nav class="nav justify-content-center border border-success bg-dark p-2">
        <ul class="nav nav-pills">
            <li class="nav-item mx-3">
                <a class="nav-link text-white" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link text-white" aria-current="page" href="form.php">Grievance Form</a>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link bg-success text-white" href="login.php">Login</a>
            </li>
        </ul>
    </nav>
    <main class="form-signin w-100 bg-dark">
        <div class="form-signin w-25 m-auto bg-dark text-center">
            <form action="uppass.php" method="POST">
            <img class="mb-3 mt-5 rounded" src="pass.png" alt="" width="150" height="150">
                <h1 class="h2 mb-3 fw-normal text-white">Forgot Password...</h1>

                <div class="form-floating mb-3 mt-3">
                    <input type="email" class="form-control bg-dark text-white" id="email" name="email" placeholder="Email">
                    <label for="email" class="text-white">Email</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="" class="form-control bg-dark text-white" id="contact" name="contact" placeholder="Contact">
                    <label for="contact" class="text-white">Contact</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control  bg-dark text-white" id="floatingPassword" name="password" placeholder="New Password">
                    <label for="floatingPassword" class="text-white">New Password</label>
                </div>
                <button class="w-50 btn btn-lg btn-success" type="submit">Forgot Password</button>
            </form>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>