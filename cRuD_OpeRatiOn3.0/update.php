<?php
include("db.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM students WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    } else {
        echo "No students found with id: $id";
        exit;
    }
} else {
    echo "No ID provided.";
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $yourname = mysqli_real_escape_string($conn, $_POST["YourName"]);
    $email = mysqli_real_escape_string($conn, $_POST["Email"]);
    $phone = mysqli_real_escape_string($conn, $_POST["Phone"]);
    $birthday = mysqli_real_escape_string($conn, $_POST["Birthday"]);
    $gender = mysqli_real_escape_string($conn, $_POST["Gender"]);
    $address = mysqli_real_escape_string($conn, $_POST["Address"]);

    $Update_query = "UPDATE students SET YourName ='$yourname',Email='$email',Phone='$phone',Birthday='$birthday',
    Gender='$gender',Address='$address' WHERE id='$id'";

    if (mysqli_query($conn, $Update_query)) {
        echo "Update sucessfully Done";
    } else {
        echo " something went wrong!!!!!!!!";
    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Customer</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4">
        <h2>Update Student</h2>
        <form action="" method="post">
            <div class="form-group">
                <label for="YourName">YourName:</label>
                <input type="text" class="form-control" id="YourName" name="YourName" value="<?php echo $row['YourName']; ?>" required>
            </div>

            <div class="form-group">
                <label for="LastName">Email:</label>
                <input type="text" class="form-control" id="Email" name="Email" value="<?php echo $row['Email']; ?>" required>
            </div>
            <div class="form-group">
                <label for="LastName">Phone:</label>
                <input type="text" class="form-control" id="Phone" name="Phone" value="<?php echo $row['Phone']; ?>" required>
            </div>

            <div class="form-group">
                <label for="LastName">Birthday:</label>
                <input type="text" class="form-control" id="Birthday" name="Birthday" value="<?php echo $row['Birthday']; ?>" required>
            </div>
            <div class="form-group">
                <label for="LastName">Gender:</label>
                <input type="text" class="form-control" id="Gender" name="Gender" value="<?php echo $row['Gender']; ?>" required>


                <div class="form-group">
                    <label for="LastName">Address:</label>
                    <input type="text" class="form-control" id="Address" name="Address" value="<?php echo $row['Address']; ?>" required>
                </div>
                <!-- Add other fields as necessary -->
                <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>