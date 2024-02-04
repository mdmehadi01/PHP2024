<?php
$Host   =  'localhost';
$Name   =  'root';
$pass   =  '';
$DB     =  'triumph_digital';

$db = mysqli_connect($Host, $Name, $pass, $DB);
if (!$db)
    echo "Connection Failed !";
