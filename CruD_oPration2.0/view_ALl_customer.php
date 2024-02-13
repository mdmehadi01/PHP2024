<?php
include("db.php");
$sql = "SELECT * FROM customers";
$result = mysqli_query($db, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4">
        <center>
            <h1>All Customers</h1>
        </center>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>FirstName</th>
                        <th>LastName</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Birthday</th>
                        <th>Gender</th>
                        <th>City</th>
                        <th>Thana</th>
                        <th>Address</th>
                        <th>Delete</th>
                        <th>Update</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($info = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td><?php echo ($info['FirstName']); ?></td>
                            <td><?php echo ($info['LastName']); ?></td>
                            <td><?php echo ($info['Email']); ?></td>
                            <td><?php echo ($info['Phone']); ?></td>
                            <td><?php echo ($info['Birthday']); ?></td>
                            <td><?php echo ($info['Gender']); ?></td>
                            <td><?php echo ($info['City']); ?></td>
                            <td><?php echo ($info['Thana']); ?></td>
                            <td><?php echo ($info['Address']); ?></td>
                            <td><a href='delete.php?id=<?php echo (isset($info["id"]) ? $info["id"] : ""); ?>' onclick="return confirm('Are you sure you want to delete this item?');">Delete</a></td>
                            <td><a href='update_customers.php?id=<?php echo (isset($info["id"]) ? $info["id"] : ""); ?>'>Update</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Include Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>