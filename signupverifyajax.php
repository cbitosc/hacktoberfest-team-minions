<?php
if(isset($_GET['js_var']))
{
    $var = $_GET['js_var'];
}
$conn=new mysqli("localhost:3306", "root", "", "chanakya");
if($conn->connect_error)
{
    die("connection failed".$conn->connect_error);
}
$s="select * from accounts where username='$var';";
$r=$conn->query($s);
if($r->num_rows)
{
            echo "THIS USERNAME ALREADY EXISTS TRY ANOTHER NAME";   
}
?>

