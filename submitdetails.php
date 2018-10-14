<?php
session_start();

 $conn=new mysqli("localhost:3306", "root", "", "chanakya");
if($conn->connect_error)
{
    die("connection failed".$conn->connect_error);
}
$a=$_SESSION["name"];
$t="select * from company where company.username='$a';";
$r=$conn->query($t);
 
$name=$_GET["companyname"];
$email=$_GET["email"];
$country=$_GET["companycountry"];
$designation=$_GET["companydesignation"];
$salary=$_GET["salary"];
$department=1;

foreach($_GET["companydepartments"] as $x)
{
    if($department==1)
            $department=$x;
    else 
        $department=$department.",".$x;
}

if($r->num_rows)
{
    $s="update company
        set name='$name',
            email='$email',
            country='$country',
            designation='$designation',
            salary='$salary',
            department='$department'
            where username='$a';";
    if($conn->query($s)==FALSE)
        echo $conn->error;
 echo "upadation succesful";
 header("location:companyhome.php");
}
else
{
    $s="insert into company(name,email,country,designation,salary,username,department)
        values('$name','$email','$country','$designation','$salary','$a','$department');";
    if($conn->query($s)==FALSE)
     echo $conn->error;
  echo "insertion succesful";
  header("location:companyhome.php");
}
?>
