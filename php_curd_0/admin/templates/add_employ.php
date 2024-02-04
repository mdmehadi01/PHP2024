<?php
// $Host   =  'localhost';
// $Name   =  'root';
// $pass   =  '';
// $DB     =  'triumph_digital';

// $db = mysqli_connect($Host, $Name, $pass, $DB);
// if (!$db)
//     echo "Connection Failed !";

include("../db.php");

session_start();

//... [Your existing PHP code]


// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Employ_Name = $_POST["Employ_Name"];
    $Email = $_POST["Email"];
    $Phone_Number = $_POST["Phone_Number"];
    $Address = $_POST["Address"];

    // Insert data into the database
    $sql = "INSERT INTO employees (Employ_Name, Email, Phone_Number, Address) VALUES ('$Employ_Name', '$Email', '$Phone_Number', '$Address')";


    if ($db->query($sql) === TRUE) {
        $_SESSION['employee_added'] = true;
        header("Location: add_employ.php"); // Redirect to home.php
        exit();
    }
}

$db->close();
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Add Employee</title>
</head>

<body>

    <div class="container mt-5">
        <h2>Add Employee</h2>
        <form action="add_employ.php" method="post">
            <div class="form-group">
                <label for="Employ_Name">Employee Name:</label>
                <input type="text" class="form-control" name="Employ_Name" required>
            </div>
            <div class="form-group">
                <label for="Email">Email:</label>
                <input type="email" class="form-control" name="Email" required>
            </div>
            <div class="form-group">
                <label for="Phone_Number">Phone Number:</label>
                <input type="tel" class="form-control" name="Phone_Number" required>
            </div>
            <div class="form-group">
                <label for="Address">Address:</label>
                <input type="text" class="form-control" name="Address" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Employee</button>
        </form>
    </div>

    <script>
        window.onload = function() {
            <?php if (isset($_SESSION['employee_added'])) : ?>
                alert("Employee added successfully!");
                <?php unset($_SESSION['employee_added']); ?>
            <?php endif; ?>
        };
    </script>

</body>

</html>