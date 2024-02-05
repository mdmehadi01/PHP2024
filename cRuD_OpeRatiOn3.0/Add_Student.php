<?php
include("db.php");

if (isset($_POST["add-student"])) {
    $yourname = $_POST['YourName'];
    $email = $_POST['Email'];
    $phone = $_POST['Phone'];
    $birthday = $_POST['Birthday'];
    $gender = $_POST['Gender'];
    $address = $_POST['Address'];


    $insert_query = "INSERT INTO students (YourName,Email,Phone,Birthday,Gender,Address)
    VALUES('$yourname','$email','$phone','$birthday','$gender','$address')";

    $result = mysqli_query($conn, $insert_query);

    if ($result) {
        echo "Student Insert Successfully";
    } else {
        echo "Something went Wrong!!!!!!!!!!!";
    }
}

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center mb-4">Add_Student</h5>

                        <form action="Add_Student.php" method="POST" enctype="multipart/form-data">

                            <div class="mb-3">
                                <label for="inputEmail" class="form-label">Your Name:</label>
                                <input type="text" class="form-control" id="inputFirstName" name="YourName" placeholder="YourName">
                            </div>

                            <div class="mb-3">
                                <label for="inputEmail" class="form-label">Email:</label>
                                <input type="email" class="form-control" id="inputEmail" name="Email" placeholder="Email">
                            </div>

                            <div class="mb-3">
                                <label for="inputEmail" class="form-label">Phone:</label>
                                <input type="number" class="form-control" id="inputPhone" name="Phone" placeholder="Phone">
                            </div>
                            <div class="mb-3">
                                <label for="inputBirthday" class="form-label">Birthday:</label>
                                <input type="DATE" class="form-control" id="inputBirthday" name="Birthday" placeholder="Birthday">
                            </div>

                            <label>Gender:</label>

                            <select name="Gender" required>

                                <option value="Male">Male</option>
                                <option value="Female">Female</option>

                            </select>
                            <br><br>

                            <div class="mb-3">
                                <label for="inputEmail" class="form-label">Address:</label>
                                <input type="text" class="form-control" id="inputEmail" name="Address" placeholder="Address">
                            </div>
                            <button type="submit" name="add-student" class="btn btn-success">Add_Student</button>
                        </form>
                        <div class="back">
                            <center>
                                <a href="index.php">Back to Admin panel</a>
                            </center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>


</html>