<?php
session_start();
$db=new mysqli("localhost:3306", "root", "", "chanakya");
$name=$_SESSION["name"];
if($db->connect_error)
{
    die("connection failed".$db->connect_error);
}
$pwd=$_SESSION["pwd"];
$pwd1=$_GET["passes"];
$new=$_GET["pa"];
if($pwd==$pwd1)
{
    $sql="update accounts
          set password='$new'
            where username='$name'";
    $_SESSION["pwd"]=$new;
    if(!$db->query($sql))
    {
        echo $db->error;
        
    }
    else
    {    
        echo "<html><center style='color:whitesmoke;font:20px'>password changed successfully</center></html>";
        Include 'studenthome.php';
    }
}
else
{
    echo "<html><center style='color:whitesmoke;font:20px'>enter your current password correctly</center></html>";
    include 'enterpassword.php';
}
?>
