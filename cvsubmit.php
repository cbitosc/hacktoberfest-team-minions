<?php
session_start();
include 'createcv.php';
$conn=new mysqli("localhost:3306", "root", "", "chanakya");
if($conn->connect_error)
{
    die("connection failed".$conn->connect_error);
}
$a=$_SESSION["name"];
$t="select * from student where username='$a';";
$r=$conn->query($t);
        $name=$_GET["name"];
        $address=$_GET["address"];
        $contactno=$_GET["contactnumber"];
        $email=$_GET["email"];
        $dob=$_GET["dob"];
        $gender=$_GET["gender"];
        $percentage=$_GET["percentage"];
        $awards=$_GET["awards"];
        $publications=$_GET["publications"];
        $interests=$_GET["interests"];
        $department=$_GET["department"];
if($r->num_rows)
{    
$s="update student 
    set name='$name',
        address='$address',
        contactno='$contactno',
        email='$email',
        dob='$dob',
        gender='$gender',
        percentage='$percentage',
        awards='$awards',
        publications='$publications',
        interests='$interests',
        department='$department'
        where username='$a';";
 if($conn->query($s)==FALSE)
     echo $conn->error;
 echo "upadation succesful";
}
else {
    $s="insert into student(name,address,contactno,email,dob,gender,percentage,awards,publications,interests,username,department) 
values('$name','$address','$contactno','$email','$dob','$gender','$percentage','$awards','$publications','$interests','$a','$department');";
  if($conn->query($s)==FALSE)
     echo $conn->error;
  echo "insertion succesful";
}
?>

