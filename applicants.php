<?php
session_start();
 include 'companylogin.php';
 $a=$_SESSION["name"];
 $conn=new mysqli("localhost:3306", "root", "", "chanakya");
$sql="select * from accounts where username in (select student from apply where company='$a')";
$r=$conn->query($sql);
if(!$r)
{
    echo $conn->error;
}
 ?>
<html>
    <link rel="stylesheet" href="external.css">
    <body>
     <center>
    <div class="d12">
        <br><br>
        <table border="0" width='10' cellspacing='7' cellpadding='5'>
            <tr>
                <td colspan="2" align="center" style="font-size:20px"><b>APPLICANTS</b></td>
            </tr>
            <tr>
                <td><hr></td>
            </tr>
            
                <td>
                <?php
while( $result1=$r->fetch_assoc())
{ 
    echo "<html><body>
       <table width='10' cellspacing='7' cellpadding='5'>
       <tr>
               <td>Name:</td>
               <td>$result1[username]</td>
               
       </tr>
       <tr>
       <td align=''>Dept:  </td>
       <td>$result1[department]</td>
       </tr>
       </table></body></html>";
}
?></td>
                <tr>
                <td><hr></td>
           
        </table>
        <br><br>
    </div>
         </center>
    </body>
</html>
