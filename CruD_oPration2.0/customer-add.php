<?php
include("db.php");

if (isset($_POST['add-customer'])) {
    $First_Name     = $_POST['FirstName'];
    $Last_Name      = $_POST['LastName'];
    $Email          = $_POST['Email'];
    $Phone          = $_POST['Phone'];
    $Birthday       = $_POST['Birthday'];
    $Gender         = $_POST['Gender'];
    $City           = $_POST['City'];
    $Thana          = $_POST['Thana'];
    $Address        = $_POST['Address'];

    $query = "INSERT INTO customers (FirstName,LastName,Email,Phone, Birthday,Gender, City,Thana,Address)
     VALUES ('$First_Name','$Last_Name','$Email','$Phone','$Birthday','$Gender','$City','$Thana', '$Address')";

    $result = mysqli_query($db, $query);

    if ($result) {
        echo "Customer Add Successfully";
    } else {
        echo "Something Went wrong!!!!";
    }
}



?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Enhanced Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center mb-4">Add Customer</h5>

                        <form action="customer-add.php" method="POST" enctype="multipart/form-data">

                            <div class="mb-3">
                                <label for="inputEmail" class="form-label">First Name:</label>
                                <input type="text" class="form-control" id="inputFirstName" name="FirstName" placeholder="FirstName">
                            </div>

                            <div class="mb-3">
                                <label for="inputEmail" class="form-label">LastName:</label>
                                <input type="text" class="form-control" id="inputLastName" name="LastName" placeholder="LastName">
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

                            <select name="Gender" required class="form-control">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                            <br><br>


                            <div class="mb-3">
                                <label for="inputEmail" class="form-label">City:</label>
                                <input type="text" class="form-control" id="inputEmail" name="City" placeholder="City">
                            </div>

                            <div class="mb-3">
                                <label for="inputEmail" class="form-label">Thana:</label>
                                <input type="text" class="form-control" id="inputEmail" name="Thana" placeholder="Thana">
                            </div>

                            <div class="mb-3">
                                <label for="inputEmail" class="form-label">Address:</label>
                                <input type="text" class="form-control" id="inputEmail" name="Address" placeholder="Address">
                            </div>


                            <button type="submit" name="add-customer" class="btn btn-primary">Add_Customer</button>
                        </form>
                        <div class="back">
                            <center>
                                <a href="http://localhost/AllPhpHere/CruD_oPration2.0/#">Back to Admin panel</a>
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