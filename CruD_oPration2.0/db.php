<?php
$Host = "localhost";
$User = "root";
$Pass = "";
$DB = "triumph_digital_customer";

$db = mysqli_connect($Host, $User, $Pass, $DB);
if (!$db)
    echo "Connection Failed !";
