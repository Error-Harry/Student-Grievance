<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LogIn</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
        main {
            height: 687px;
        }
        a {
            color: white;
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
                <a class="nav-link bg-success text-white" href="#">Login</a>
            </li>
        </ul>
    </nav>
    <main class="form-signin w-100 bg-dark">
        <div class="form-signin w-50 m-auto bg-dark text-center">
            <form action="logcheck.php" method="POST">
                <img class="mb-5 mt-5 rounded" src="logo.png" alt="" width="200" height="200">
                <h1 class="h2 mb-3 fw-normal text-white">sign in</h1>

                <div class="form-floating mb-3">
                    <input type="" class="form-control  bg-dark text-white" id="username" name="username" placeholder="Username">
                    <label for="username" class="text-white">Username</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control  bg-dark text-white" id="floatingPassword" name="password" placeholder="Password">
                    <label for="floatingPassword" class="text-white">Password</label>
                </div>
                <div>
                    <p><a href="forgotpass.php">Forgot Password</a></p>
                </div>
                <button class="w-50 btn btn-lg btn-success" type="submit">Sign in</button>
            </form>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>