<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Grievance Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#rform").validate({
                rules: {
                    name: "required",
                    department: "required",
                    year: "required",
                    div: "required",
                    rno: {
                        required: true,
                        minlength: 2,
                        number: true
                    },
                    contact: {
                        required: true,
                        minlength: 10,
                        number: true
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    is: "required",
                    gtype: "required",
                    cabout: "required",
                    cdescription: "required"
                },
                messages: {
                    name: "Please Enter full Name",
                    department: "Please Enter your department",
                    year: "Please Enter your Year",
                    div: "Please Enter your Division",
                    rno: {
                        required: "Please Enter Roll No",
                        minlength: "Roll No should be 2 digit",
                        number: "Please Enter valid No"
                    },
                    contact: {
                        required: "Please Enter contact no",
                        minlength: "Contact should be 10 digit",
                        number: "Please Enter valid no"
                    },
                    email: {
                        required: "Please Enter Email",
                        email: "Please Enter valid Email"
                    },
                    is: "Fill Proper information",
                    gtype: "Fill Proper information",
                    cabout: "Fill Proper information",
                    cdescription: "Fill Proper information"
                },
                submitHandler: function(form) {
                    alert("data is correct.");
                    form.submit();
                }
            });

        });
    </script>
    <style>
        .error {
            color: white;
        }
    </style>
</head>

<body>
    <nav class="nav justify-content-center border border-success bg-dark p-2 mb-3">
        <ul class="nav nav-pills">
            <li class="nav-item mx-3">
                <a class="nav-link text-white" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link bg-success text-white" aria-current="page" href="#">Grievance Form</a>
            </li>
            <li class="nav-item mx-3">
                <a class="nav-link text-white" href="login.php">Login</a>
            </li>
        </ul>
    </nav>
    <form class="frame row g-3 bg-dark p-3" id="rform" action="insert.php" method="POST">
        <h3 class="text-white">
            Grievance Form...
        </h3>
        <div class="input-group mb-3 ">
            <span class="input-group-text bg-dark text-white" id="inputGroup-sizing-default">Name</span>
            <input type="" class="form-control bg-dark text-white" id="name" name="name" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>
        <div class="row">
            <div class="col">
                <select class="form-select bg-dark text-white" id="department" name="department" aria-label="Department">
                    <option selected>Dept...</option>
                    <option value="CSE">CSE</option>
                    <option value="E&TC">E&TC</option>
                    <option value="MECH">MECH</option>
                    <option value="CIVIL">CIVIL</option>
                    <option value="ELECTRICAL">ELECTRICAL</option>
                </select>
            </div>
            <div class="col">
                <select class="form-select bg-dark text-white" id="year" name="year" aria-label="Year">
                    <option selected>Year...</option>
                    <option value="1st">1st</option>
                    <option value="2nd">2nd</option>
                    <option value="3rd">3rd</option>
                    <option value="4th">4th</option>
                </select>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <select class="form-select bg-dark text-white" id="div" name="div" aria-label="Div">
                    <option selected>Div...</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                </select>
            </div>
            <div class="col">
                <input type="number" class="form-control bg-dark text-white" id="rno" name="rno" placeholder="Roll Number..." aria-label="Roll Number">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <input type="" class="form-control bg-dark text-white" id="contact" name="contact" placeholder="Contact Number" aria-label="Contact Number">
            </div>
            <div class="col">
                <input type="email" class="form-control bg-dark text-white" id="email" name="email" placeholder="Email Address" aria-label="Email Address">
            </div>
        </div>
        <select class="form-select form-select-lg mb-3 bg-dark text-white text-white" id="is" name="is" aria-label=".form-select-lg example">
            <option selected>Choose...</option>
            <option value="Hostellite">Hostellite</option>
            <option value="Localite">Localite</option>
            <option value="Private Room">Private Room</option>
        </select>
        <div class="row mt-3">
            <div class="col">
                <select class="form-select bg-dark text-white" id="gtype" name="gtype" aria-label="gtype">
                    <option selected>Grievance Type...</option>
                    <option value="Non-Acedemic Grievance">Non-Acedemic Grievance</option>
                    <option value="Acedemic Grievance">Acedemic Grievance</option>
                    <option value="Requirements Grievance">Requirements Grievance</option>
                </select>
            </div>
            <div class="col">
                <select class="form-select bg-dark text-white" id="status" name="status" aria-label="status" disabled>
                    <option selected>Grievance Status(For Staff)...</option>
                    <option value="Not-Completed">Not-Completed</option>
                    <option value="Under Action">Under Action</option>
                    <option value="Completed">Completed</option>
                    <option value="Rejected">Rejected</option>
                </select>
            </div>
        </div>
        <div class="mb-3">
            <label for="cabout" class="form-label text-white">Complaint subject</label>
            <input type="" class="form-control bg-dark text-white" id="cabout" name="cabout" placeholder="Subject">
        </div>
        <div class="mb-3">
            <label for="cdescription" class="form-label text-white">Complaint description</label>
            <textarea class="form-control bg-dark text-white" id="cdescription" name="cdescription" rows="5"></textarea>
        </div>
        <div>
            <button type="submit" class="btn btn-success">Submit</button>
            <button type="reset" class="btn btn-success">Reset</button>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>