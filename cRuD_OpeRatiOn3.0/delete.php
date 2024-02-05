<?php
include("db.php");

if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']);

    $delete_query = "DELETE FROM students WHERE id='$id'";

    if (mysqli_query($conn, $delete_query)) {
        echo "Record deleted Successfully";
    } else {
        echo "Something went wrong!!!!!!!!!!!";
    }
}

header("Location: view_student.php");
exit;
