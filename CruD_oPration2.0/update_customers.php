<?php
include("db.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM customers WHERE id = $id";
    $result = mysqli_query($db, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    } else {
        echo "No customer found with id: $id";
        exit;
    }
} else {
    echo "No ID provided.";
    exit;
}

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstName = mysqli_real_escape_string($db, $_POST['FirstName']);
    $lastName = mysqli_real_escape_string($db, $_POST['LastName']);
    $email = mysqli_real_escape_string($db, $_POST['Email']);
    $phone = mysqli_real_escape_string($db, $_POST['Phone']);
    $birthday = mysqli_real_escape_string($db, $_POST['Birthday']);
    $gender = mysqli_real_escape_string($db, $_POST['Gender']);
    $city = mysqli_real_escape_string($db, $_POST['City']);
    $thana = mysqli_real_escape_string($db, $_POST['Thana']);
    $address = mysqli_real_escape_string($db, $_POST['Address']);


    $updateQuery  = "UPDATE customers SET FirstName='$firstName', LastName='$lastName', Email='$email', Phone='$phone',
    Birthday='$birthday', Gender='$gender', City='$city', Thana='$thana', Address='$address' WHERE id='$id'";


    if (mysqli_query($db, $updateQuery)) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . mysqli_error($db);
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
        <h2>Update Customer</h2>
        <form action="update_customers.php?id=<?php echo $id; ?>" method="post">

            <div class="form-group">
                <label for="FirstName">First Name:</label>
                <input type="text" class="form-control" id="FirstName" name="FirstName" value="<?php echo $row['FirstName']; ?>" required>
            </div>
            <div class="form-group">
                <label for="LastName">Last Name:</label>
                <input type="text" class="form-control" id="LastName" name="LastName" value="<?php echo $row['LastName']; ?>" required>
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
            <label>Gender:</label>

            <select name="Gender" required class="form-control">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            <br><br>


            <div class="form-group">
                <label for="LastName">City:</label>
                <input type="text" class="form-control" id="City" name="City" value="<?php echo $row['City']; ?>" required>
            </div>
            <div class="form-group">
                <label for="LastName">Thana:</label>
                <input type="text" class="form-control" id="Thana" name="Thana" value="<?php echo $row['Thana']; ?>" required>
            </div>

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