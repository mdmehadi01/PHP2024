<?php

$Host = "localhost";
$User = "root";
$Pass = "";
$DB = "crud_demo";

$conn = mysqli_connect($Host, $User, $Pass, $DB);
if (!$conn)
    echo "Connection Failed!";
