<?php
error_reporting(0);
session_start();

$Host   =  'localhost';
$Name   =  'root';
$pass   =  '';
$DB     =  'titumir';

$db = mysqli_connect($Host,$Name,$pass,$DB);
if(!$db)
    echo "Connection Faield !";

if($_GET['student_id'])
{
    $user_id=$_GET['student_id'];
    $sql="DELETE FROM users WHERE id='$user_id' ";
    $result=mysqli_query($db,$sql);
    if ($result)
{
    $_SESSION['message']='Delete Student is Successful';
    echo"Data delete sucessfully Done";
}
}
if($_GET['teacher_id'])
{
    $user_id=$_GET['teacher_id'];
    $sql="DELETE FROM teachers WHERE id='$user_id' ";
    $result=mysqli_query($db,$sql);
    if ($result)
{
    $_SESSION['message']='Delete Student is Successful';
    echo"Data delete sucessfully Done";
}
}



?>