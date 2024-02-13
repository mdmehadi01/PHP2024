<?php
include("db.php");

// Check if the 'id' GET variable is set
if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($db, $_GET['id']);

    // Delete query
    $deleteQuery = "DELETE FROM customers WHERE id = '$id'";

    if (mysqli_query($db, $deleteQuery)) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($db);
    }
} else {
    echo "No ID provided.";
}


header("Location: view_All_customer.php");
exit;
