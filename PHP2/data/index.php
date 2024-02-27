<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db   = "cmt6";

    $Connection = mysqli_connect($host,$user,$pass,$db);


    if (!$Connection) {
        echo "Connection Failed !";
    }
    else
        echo "Connetected !";


    if (isset($_POST['submit'])) {
        $serial = $_POST['serial'];
        $name = $_POST['name'];
        $class_roll = $_POST['class_roll'];
        $board_roll = $_POST['board_roll'];
        $reg_no = $_POST['reg_no'];
        $phone = $_POST['phone'];


        $query = "INSERT INTO students (serial,name,board_roll,class_roll,reg_no,phone) VALUES($serial,'$name','$class_roll','$board_roll','$reg_no','$phone')";

        mysqli_query($Connection,$query);
    }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD</title>
</head>
<body>
    <h1>WElcome to PHP CRUD  Application</h1>

    <form action="index.php" method="POST">
        <label for="serial">Serial</label>-
        <input type="number" name="serial"> <br>

        <label for="Name">Name:</label>
        <input type="text" name="name"> <br>

        <label for="class_roll">Class Roll</label>
        <input type="text" name="class_roll"> <br>

        <label for="board_roll">Board roll</label>
        <input type="text" name="board_roll"> <br>

        <label for="reg_no">Reg No</label>
        <input type="text" name="reg_no"> <br>

        <label for="phone">Phone</label>
        <input type="text" name="phone"> <br>

        <input type="submit" name="submit" value="Add Student">
    </form>
</body>
</html>