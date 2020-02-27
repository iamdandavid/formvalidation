<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="output.php">
    <style>
        body:hover{
            opacity: 100;
        }
        body{
            background-image: url(bk.png);
            background-repeat: no-repeat;
            background-size: 100% 100%;
            opacity: .50;
        }
        .container-fluid{
            border: 2px solid black;

        }
        .col-md-4{
            border: 2px solid black;
        }
        .card{
            background-color: #ccf5ff;

        }

    </style>

    <title>Student Registration</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="card">
            <div class="card-header text-center bg-info">
                <h1 class="text-white">STUDENT REGISTRATION</h1>
            </div>
            <form method="POST" action="output.php">
                <div class="col-md-12 mb-2">
                <label for="firstname">First Name</label>
                <input type="text" name="firstname" class="form-control" placeholder="First Name">
                </div>
                <div class="col-md-12 mb-2">
                <label for="firstname">Last Name</label>
                <input type="text" name="lastname" class="form-control" placeholder="Last Name">
                </div>
                <div class="col-md-12 mb-2">
                <label for="middlename">Middle Name</label>
                <input type="text" name="middlename" class="form-control" placeholder="Middle Name">
                </div>
                <div class="col-md-12 mb-2">
                <label for="address">Address</label>
                <input type="text" name="address" class="form-control" placeholder="Address">
                </div>
                <div class="col-md-12 mb-2">
                <label for="placeofbirth">Placce of Birth</label>
                <input type="text" name="placeofbirth" class="form-control" placeholder="Place of Birth">
                </div>
                <div class="col-md-12 mb-2">
                <label for="dateofbirth">Date of Birth</label>
                <input type="date" name="dateofbirth" class="form-control" placeholder="mm/dd/yy">
                </div>
                <div class="col-md-12 mb-2">
                <label for="guardian">Guardian</label>
                <input type="text" name="guardian" class="form-control" placeholder="Guardian">
                </div>
                <div class="col-md-12 mb-2">
                <label for="contactnumber">Contact Number</label>
                <input type="text" name="contactnumber" class="form-control" placeholder="Contact Number">
                </div>
                <div class="col-md-12 mb-2">
                <label for="gender">Gender </label>
                <input type="radio" value="male" name="gender"> Male
                <span>
                <input type="radio" value="female" name="gender"> Female
                </div>
                <div class="col-md-12 mb-2">
                <label for="civilstatus">Civil Status</label>
                <input type="text" name="civilstatus" class="form-control" placeholder="Civil Status">
                </div>
                <div class="col-md-12 mb-2">
                <label for="yearlevel">Year Level</label>
                <select name="yearlevel">
                    <option value="firstyear">First Year</option>
                    <option value="secondyear">Second Year</option>
                    <option value="thirdyear">Third Year</option>
                    <option value="fourthyear">Fourth Year</option>
                </select>
                </div>
                <div class="col-md-12 mb-2">
                <label for="course">Course</label>
                <select name="course">
                    <option value="computerengineering">Computer Engineering</option>
                    <option value="informationtehnology">Information Technology</option>
                    <option value="technologycommunicationtechnology">Technology Communication Management</option>
                    <option value="datascience">Data Science</option>
                </select>
                </div>
                <div class="col-md-12 mb-2">
                <label for="schoolyear">School Year</label>
                <input type="text" name="schoolyear" class="form-control" placeholder=" e.g 2019-2020">
                </div>
                <div class="col-md-12 mb-2">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" placeholder="user@gmail.com" required>
                </div>
                <center>
                <a href="output.php"></a>
                <input class="btn btn-primary" type="Submit">
                </center>
            </form>
            <div class="card-footer text-center">
                Copyright &copy; 2020
            </div>
        </div>
            
    </div>
    
</div>


</body>
</html>