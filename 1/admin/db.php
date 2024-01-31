<?php
$Host   =  'localhost';
$Name   =  'root';
$pass   =  '';
$DB     =  'blog';

$db = mysqli_connect($Host, $Name, $pass, $DB);
if (!$db)
    echo "Connection Failed !";
