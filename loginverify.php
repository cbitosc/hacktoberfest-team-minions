<?php
session_start();
$_SESSION["name"]=$_GET["name"];
$_SESSION["pwd"]=$_GET["password"];
$_SESSION["type"]=$_GET["type"];

$name=$_GET["name"];
$pwd=$_GET["password"];
$type=$_GET["type"];
$conn=new mysqli("localhost:3306", "root", "", "chanakya");
if($conn->connect_error)
{
    die("connection failed".$conn->connect_error);
}
$s="select * from accounts where username='$name';";
$r=$conn->query($s);
if($r->num_rows)
{
    while($row=$r->fetch_assoc())
    {
        if($row['username']==$name)
        {
            if($row['password']==$pwd)
            {
                if($row['type']==$type)
                {
                    if($row['type']=='student')
                        header("location: studenthome.php");
                    else 
                    {
                        header("location: companyhome.php");
            
                    }
                }
                else 
                {
                    echo "<html><body><center><p>PLEASE ENTER THE CORRECT TYPE OF LOGIN</p></center></body></html>";
                include 'login.php';
                
                }
            }
            else 
            {
                
                header('Refresh:0; url=index.php');
        echo '<script language="javascript">';
        echo "alert('PLEASE ENTER THE CORRECT LOGIN')";
        echo '</script>';
                
            }
        }
    }
}
else 
{
    header('Refresh:0; url=index.php');
    echo '<script language="javascript">';
    echo "alert('PLEASE ENTER THE CORRECT LOGIN')";
    echo '</script>';
            
    
}
    $conn->close();
?>

