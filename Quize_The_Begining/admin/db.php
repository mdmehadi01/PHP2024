<?php
$Host   =  'localhost';
$Name   =  'root';
$pass   =  '';
$DB     =  'basics_quize';

$db = mysqli_connect($Host, $Name, $pass, $DB);
if (!$db)
    echo "Connection Failed !";
