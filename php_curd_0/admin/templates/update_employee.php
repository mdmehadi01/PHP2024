<?php
// Include the database connection file
include("../db.php");

$employee = []; // Initialize the employee array

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $employeeId = $_POST['id'];
    $employName = isset($_POST['Employ_Name']) ? $_POST['Employ_Name'] : '';
    $email = isset($_POST['Email']) ? $_POST['Email'] : '';
    $phoneNumber = isset($_POST['Phone_Number']) ? $_POST['Phone_Number'] : '';
    $address = isset($_POST['Address']) ? $_POST['Address'] : '';

    // Update employee data in the database
    $query = "UPDATE employees SET Employ_Name='$employName', Email='$email', Phone_Number='$phoneNumber', Address='$address' WHERE ID = $employeeId";

    if ($db->query($query) === TRUE) {
        echo "Employee updated successfully";
    } else {
        echo "Error updating employee: " . $db->error;
    }
} else {
    // Assuming you have an employee ID to fetch
    $employeeId = $_GET['id'] ?? 0; // Replace 0 with a default or error handling

    // Fetch employee data from the database
    $query = "SELECT * FROM employees WHERE ID = $employeeId";
    $result = $db->query($query);

    if ($result->num_rows > 0) {
        $employee = $result->fetch_assoc();
    } else {
        echo "No employee found";
    }
}

// Close the database connection
$db->close();
?>

<!DOCTYPE html>
<html lang="en">

<!-- ... (unchanged HTML) ... -->

</html>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Update Employee</title>
</head>

<body>

    <div class="container mt-5">
        <h2>Update Employee</h2>
        <form action="update_employee.php" method="POST">
            <input type="hidden" name="id" value="<?php echo isset($employee['id']) ? $employee['id'] : ''; ?>">

            <div class="form-group">
                <label for="Employ_Name">Employee Name:</label>
                <input type="text" class="form-control" name="Employ_Name" value="<?php echo isset($employee['Employ_Name']) ? $employee['Employ_Name'] : ''; ?>" required>
            </div>
            <div class="form-group">
                <label for="Email">Email:</label>
                <input type="email" class="form-control" name="Email" value="<?php echo isset($employee['Email']) ? $employee['Email'] : ''; ?>" required>
            </div>
            <div class="form-group">
                <label for="Phone_Number">Phone Number:</label>
                <input type="tel" class="form-control" name="Phone_Number" value="<?php echo isset($employee['Phone_Number']) ? $employee['Phone_Number'] : ''; ?>" required>
            </div>
            <div class="form-group">
                <label for="Address">Address:</label>
                <input type="text" class="form-control" name="Address" value="<?php echo isset($employee['Address']) ? $employee['Address'] : ''; ?>" required>
            </div>

            <button type="submit" class="btn btn-primary">Update Employee</button>
        </form>
    </div>

</body>

</html>