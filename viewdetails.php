<?php
session_start();
 include 'companylogin.php';
 $conn=new mysqli("localhost:3306", "root", "", "chanakya");
if($conn->connect_error)
{
    die("connection failed".$conn->connect_error);
}
$a=$_SESSION["name"];
$s="select * from company where username='$a';";
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
    text-shadow:4px 4px 8px white;'>No details present to edit<a href='createdetails.php'> click here</a> to create</div></html>";
    exit(); 
}
?>

<html>
    <head>
    <title> </title>
    <link rel="stylesheet" href="external.css">
    <style>
            input[type=text] 
            {
                border: 2px solid #0820f3;
            }
            input[type=number]
            {
                    border: 2px solid #0820f3;
            }
            input[type=date]
            {
                border: 2px solid #0820f3;
            }
        </style>
    </head>
    <body>
     <div class="d2">
         <form action="submitdetails.php">   
    <table border="1" width="40" cellspacing="10" cellpadding="4">
        <thead>
            <tr>
                <th colspan="2" align="center">REGISTRATION FORM</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td colspan="2"><b>Your Contact Information</b></td>
            </tr>
            <tr>
                <td>Company Name:</td>
                <td><?php echo $row['name']?></td>
            </tr>
            <tr>
                <td>Company Email:</td>
                <td><?php echo $row['email']?></td>
            </tr>
            <tr>
                <td>Country:</td>
                <td><?php echo $row['country']?></td>
            </tr>
            <tr>
                <td colspan="2"><b>Reqirements Information</b></td>
            </tr>
            <tr>
                <td>Departments To Be Allowed:</td>
                <td><?php echo $row['department']?>
                </td>
            </tr>
            <tr>
                <td>Designation:</td>
                 <td><?php echo $row['designation']?></td>
            </tr>
            <tr>
                <td>Salary(lakhs):</td>
                <td><?php echo $row['salary']?></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><a href="editdetails.php"><input type="button" value="Edit" name="edit" /></a></td>
            </tr>
        </tbody>
        
    </table>
    </form> 
    </div>
        <br><br><br><br>
</body>
</html>
