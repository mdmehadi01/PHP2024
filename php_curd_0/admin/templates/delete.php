<?php
// Include the database connection file
include("../db.php");

// Function to redirect to the employee list
function redirectToEmployeeList()
{
    header("Location: view_All_employee.php");
    exit();
}

// Variable to track if delete was successful
$deleteSuccess = false;

// Check if the 'id' GET parameter is set
if (isset($_GET['id'])) {
    $employee_id = $_GET['id'];

    // Check if the form was submitted
    if (isset($_POST['confirm_delete'])) {
        // Prepare the DELETE query
        $query = "DELETE FROM employees WHERE id = ?";

        if ($stmt = $db->prepare($query)) {
            $stmt->bind_param("i", $employee_id);
            if ($stmt->execute()) {
                // Set delete success flag
                $deleteSuccess = true;
            } else {
                $error_message = "Error: " . $stmt->error;
            }
            $stmt->close();
        } else {
            $error_message = "Error: " . $db->error;
        }
    } elseif (isset($_POST['cancel'])) {
        // Redirect to the employee list if cancellation is requested
        redirectToEmployeeList();
    }
} else {
    die("Error: No ID provided");
}

// Close the database connection
$db->close();

// If delete was successful, display JavaScript alert and then redirect
if ($deleteSuccess) {
    echo "<script>
            alert('Delete successfully done.');
            window.location.href='view_All_employee.php';
          </script>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Delete Employee</title>
</head>

<body>
    <div class="container mt-5">
        <h2>Delete Employee</h2>
        <?php if (!empty($error_message)) {
            echo "<p class='text-danger'>$error_message</p>";
        } ?>
        <p>Are you sure you want to delete this employee?</p>

        <form method="post">
            <input type="hidden" name="employee_id" value="<?php echo $employee_id; ?>">
            <button type="submit" name="confirm_delete" class="btn btn-danger">Delete</button>
            <button type="submit" name="cancel" class="btn btn-secondary">Cancel</button>
        </form>
    </div>
</body>

</html>