
<?php
session_start();
$_SESSION["name"]=$_GET["name"];
$_SESSION["pwd"]=$_GET["password"];
$_SESSION["type"]=$_GET["type1"];

$_SESSION["email"]=$_GET["email"];
$name=$_SESSION["name"];
$pwd=$_SESSION["pwd"];
$type=$_SESSION["type"];

$email = $_SESSION["email"];
$conn=new mysqli("localhost:3306", "root", "", "chanakya");
if($conn->connect_error)
{
    die("connection failed".$conn->connect_error);
}
$s="select * from accounts where username='$name';";
$r=$conn->query($s);
if($r->num_rows )
{
    while($row=$r->fetch_assoc())
    {
        if($row['username']==$name || $row['type']==$type)
        {
            echo "<html><body><center><div style='background:black;font:26px;color:whitesmoke'><hr>THIS USERNAME ALREADY EXISTS TRY ANOTHER NAME<hr></div></center></body></html>";
            include "index.php";
            exit();
        }
        
    }
}
else 
{
    $i="insert into accounts(username,password,type,email) values('$name','$pwd','$type','$email')";
    if($conn->query($i)==FALSE)
    {
        echo $conn->error; 
    }       
    else {
        echo "<html><script>alert('SIGNUP SUCEESSFUL')</script></html>";

    }
    header('Refresh:0; url=index.php');
    

}
?> 

