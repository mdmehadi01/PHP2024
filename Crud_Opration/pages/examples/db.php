<?php
$Host = "localhost";
$User = "root";
$pass = "";
$db = "triumph_digital";

$conn = mysqli_connect($Host, $User, $pass, $db);


if ($conn) {
    echo "connection successfuly done";
} else {
    echo "connection Faield";
}
