<!Doctype html>
<html>

<?php include 'header.php' ?>
<?php
session_start();
include 'studentlogin.php';
$db=new mysqli("localhost:3306", "root", "", "chanakya");
$name=$_SESSION["name"];
if($db->connect_error)
{
    die("connection failed".$db->connect_error);
}
$s="select * from accounts where username='$name';";
$r=$db->query($s);
if($r->num_rows)
{
    $row=$r->fetch_assoc();
}
$result = $db->query("SELECT * FROM image where username='$name'");
$row1=$db->query("select c.* from company c where c.name in (select company from apply where student='$name')");
?>
     <center>
    <div class="d10">
        <br><br>
        <table border="0" width='10' cellspacing='7' cellpadding='5'>
            <tr>
                <td colspan="2" align="center" style="font-size:20px"><b>PROFILE</b></td>
            </tr>
            <tr>
                <td><hr></td>
            </tr>
            <tr>
                <td colspan="4"><?php
                
                    if($result->num_rows)
                     {
            $imgData = $result->fetch_assoc();
            $s=$imgData['img'];
            echo '<img src="data:image/jpg;base64,'.base64_encode($s).'"width="150" height="130" style="border-radius: 40%;">';
        }
        else 
        {
            echo '<a href="upload.php">Upload Image</a>';
        }  ?>    
                </td>
            </tr>
            <tr>
                <td><hr></td>
            </tr>
            <tr>
                <td colspan="2">NAME:</td>
                <td><?php echo "$row[username]";?></td>
            </tr>
            <tr>
                <td><hr></td>
            </tr>
            <tr>
                <td colspan="2">Type:</td>
                <td><?php echo "$row[type]";?></td>
            </tr>
            <tr>
                <td><hr></td>
            </tr>
            <tr>
                <td colspan="2">Department:</td>
                <td><?php echo "$row[department]";?></td>
            </tr>
            <tr>
                <td><hr></td>
            </tr>
            <tr>
                <td colspan="2">
                    Company(s) applied:
                </td>
                <td>
                <?php
while( $result1=$row1->fetch_assoc())
{ 
    echo "<html><body>
       <table align='center' width='10' cellspacing='7' cellpadding='5'>
       <tr>
               
               <td>$result1[name]</td>
       </tr>
       </table></body></html>";
}
?></td>
                <tr>
                <td><hr></td>
            </tr>

            </tr>
            <tr>
                <td colspan="2" align="center"> <a href="enterpassword.php"><input type="button" value="ChangePassword"/></a></td>
            </tr>
        </table>
        <br><br>
    </div>
         </center>
         <?php include 'footer.php' ?>
    </body>
</html>


