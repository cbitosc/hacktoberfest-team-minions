
<?php
session_start();
include 'studentlogin.php';
$conn=new mysqli("localhost:3306", "root", "", "chanakya");
if($conn->connect_error)
{
    die("connection failed".$conn->connect_error);
}
$a=$_SESSION["name"];
$s="select * from student where username='$a';";
$r=$conn->query($s);
$row;
if($r->num_rows)
{    
    $row=$r->fetch_assoc();
    
}
else {
    echo "<html><div style='position:relative;
    left:10px;
    top:30px;
    width:450px;
    border-radius: 25px;
    height: fit-content;
    background: red; 
    background: linear-gradient(red, yellow);
    border: 15px solid  #0f0406;
    color:black;
    font:28px;
    font-weight:bold;
    text-shadow:4px 4px 8px white;'><br>No CV present to view<a href='createcv.php'> click here</a> to create a cv<br><br></div></html>";
    exit();    
}
?>

<html>
    <head>
        <link rel="stylesheet" href="external.css">
    
    
    </head>
 
    <body>
     <div class="d13">
         <br>
         <form>   
    <table align="center" border="0" width="40" cellspacing="10" cellpadding="4">
        <thead>
            <tr>
                <th colspan="3" align="center" style="font-size:24px;font-weight: bold">CURRICULUM VITAE</th>
            </tr>
            <tr>
                <td colspan="2"><hr></td>
            </tr>
            <tr>
                <td colspan="2"><hr></td>
            </tr>
        </thead>
        <tbody>
            
            <tr>
                <td colspan="2" style="font-size:20px;font-weight: bold"><b>Your Contact Information</b></td>
            </tr>
            <tr>
                <td>Name:</td>
                <td><?php echo $row['name']?></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><?php echo $row['address']?></td>
            </tr>
            <tr>
                <td>Contact number:</td>
                <td><?php echo $row['contactno']?></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><?php echo $row['email']?></td>
            </tr>
            <tr>
                <td colspan="2"><hr></td>
            </tr>
            <tr>
                <td colspan="2" style="font-size:20px;font-weight: bold"><b>Optional Personal Information</b></td>
            </tr>
            <tr>
                <td>DOB:</td>
                <td><?php echo $row['dob']?></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td><?php echo $row['gender']?>
                </td>
            </tr>
            <tr>
                <td colspan="2"><hr></td>
            </tr>
            <tr>
                <td>Department:</td>
                <td><?php echo $row['department']?></td>
            </tr>
            <tr>
                <td>Percentage:</td>
                <td><?php echo $row['percentage']?></td>
            </tr>
            <tr>
                <td colspan="2"><hr></td>
            </tr>
            <tr>
                <td colspan="2" style="font-size:20px;font-weight: bold"><b>Others</b></td>
            </tr>
            <tr>
                <td>Awards:</td>
                <td><?php echo $row['awards']?></td>
            </tr>
            <tr>
                <td>Publications:</td>
                <td><?php echo $row['publications']?></td>
            </tr>
            <tr>
                <td>Interests:</td>
                <td><?php echo $row['interests']?></td>
            </tr>
            <tr>
                <td colspan="2"><hr></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><a href="editcv.php"><input type="button" value="Edit" name="edit" /></a></td>
            </tr>
        </tbody>
        
    </table>
    </form> 
         <br><br>
    </div>
        <br><br><br><br>
</body>
</html>