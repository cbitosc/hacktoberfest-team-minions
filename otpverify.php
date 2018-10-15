<?php
session_start();
$x=$_SESSION["otp"];
$otp=$_GET["otp"];
$name=$_SESSION["name"];
$pwd=$_SESSION["pwd"];
$type=$_SESSION["type"];
$department=$_SESSION["department"];
$email=$_SESSION["email"];
$conn=new mysqli("localhost:3306", "root", "", "chanakya");
if($conn->connect_error)
{
    die("connection failed".$conn->connect_error);
}
if($x==$otp)
{
    $i="insert into accounts(username,password,type,department,email) values('$name','$pwd','$type','$department','$email')";
    if($conn->query($i)==FALSE)
    {
        echo $conn->error; 
    }       
    else {
        echo "<html><script>alert('SIGNUP SUCEESSFUL')</script></html>";
        include "index.html";
    }
}
 else {
     echo "enter correct otp";
     include "otp.php";
}
?>