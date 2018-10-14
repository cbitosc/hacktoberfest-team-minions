<?php
session_start();
include 'studentlogin.php';
$conn=new mysqli("localhost:3306", "root", "", "chanakya");
if($conn->connect_error)
{
    die("connection failed".$conn->connect_error);
}
$a=$_SESSION["name"];
$s="delete from student where username='$a';";
$r=$conn->query($s);
?>