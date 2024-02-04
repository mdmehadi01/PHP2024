<?php
// Include the database connection file
include("../db.php");

// Fetch all data from the employees table
$result = $db->query("SELECT * FROM employees");

// Check for errors in the query
if (!$result) {
    die("Error: " . $db->error);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Employee List</title>
</head>

<body>

    <div class="container mt-5">
        <h2>Employee List</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Employee Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Address</th>
                    <th class="table_th">Delete</th>
                    <th class="table_th">Update</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Loop through the result set and display data using foreach
                foreach ($result as $row) {
                    echo "<tr>";
                    echo "<td>" . (isset($row["Employ_Name"]) ? $row["Employ_Name"] : "") . "</td>";
                    echo "<td>" . (isset($row["Email"]) ? $row["Email"] : "") . "</td>";
                    echo "<td>" . (isset($row["Phone_Number"]) ? $row["Phone_Number"] : "") . "</td>";
                    echo "<td>" . (isset($row["Address"]) ? $row["Address"] : "") . "</td>";
                    echo "<td><a href='delete.php?id=" . (isset($row["id"]) ? $row["id"] : "") . "'>Delete</a></td>"; // Add delete link
                    echo "<td><a href='update_employee.php?id=" . (isset($row["id"]) ? $row["id"] : "") . "'>Update</a></td>"; // Add update link
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>

<?php
// Close the database connection
$db->close();
?>