<?php
session_start();


include 'header.php';
include 'studentlogin.php';
include 'footer.php';
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
    $row=$r->fetch_assoc();
else{
    echo "<html><div style='position:relative;
    left:10px;
    top:30px;
    width:450px;
    border-radius: 25px;
    height: fit-content;
    font-weight:bold;
    text-shadow:4px 4px 8px white;'><br>No CV present to view<a href='createcv.php'> click here</a> to create a cv<br><br></div></html>";
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
        <SCRIPT>
            function verify_em(s)
            {
                var x=document.getElementById(s).value;
                var w=/^[a-z , 0-9]{3,}\@[a-z]{4,}\.[a-z , .]{3,5}$/;
                if(!x.match(w))
                {
                    var e="invalid";
                    document.getElementById("p3").innerHTML=e;
                }
                else
                {
                    var f="";
                    document.getElementById("p3").innerHTML=f;
                }
}
            function verify_cn(x)
            {
                var z=document.getElementById(x).value;
                var y=/^[^0][0-9]{9}$/;
                if(!z.match(y))
				document.getElementById("p2").innerHTML="invalid";
                else
                    document.getElementById("p2").innerHTML="";
            }            </script>
    </head>
    <body>
     <div class="jumbotron" style='height:200vh' align='center'>
         <br>
         <form action="cvsubmit.php">   
    <table align="center" border="0" width="40" cellspacing="10" cellpadding="4">
        <thead>
            <tr>
                <th colspan="2" align="center" style="font-size:24px;font-weight: bold">CURRICULUM VITAE</th>
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
                <td colspan="2"><hr></td>
            </tr>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="name" value="<?php echo $row['name']?>" required/></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><input type="text" name="address" value="<?php echo $row['address']?>" required/></td>
            </tr>
            <tr>
                <td>Contact number:</td>
                <td><input type="number" name="contactnumber" id="contactnumber" onchange="verify_cn(this.id)" required/></td>
                <td  colspan="2" id="p2"></td>
            </tr>
            
            <tr>
                <td>Email:</td>
                <td><input type="text" name="email" id="email" value="<?php echo $row['email']?>" onchange="verify_em(this.id)" required/></td>
                <td  colspan="2" id="p3"></td>
            </tr>
            <tr>
                <td colspan="2"><hr></td>
            </tr>
            <tr>
                <td colspan="2" style="font-size:20px;font-weight: bold"><b>Optional Personal Information</b></td>
            </tr>
            <tr>
                <td>DOB:</td>
                <td><input type="date" name="dob" max="2000-12-31" required/></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td><input type="radio" name="gender"  required/>male
                </td>
            </tr>
            <tr>
                <td colspan="2" style="font-size:20px;font-weight: bold"><b>Education</b></td>
            </tr>
            
            
            <tr>
                <td>Department:</td>
                <td><input type="text" name="undergraduationname" value="<?php echo $row['department']?>" required/></td>
            </tr>
            <tr>
                <td>GPA:</td>
                <td><input type="text" name="undergraduationpercentage" min="70" max="100" required/></td>

            </tr>
            <tr>
                <td colspan="2"><hr></td>
            </tr>
            <tr>
                <td colspan="2" style="font-size:20px;font-weight: bold"><b>Others</b></td>
            </tr>
            <tr>
                <td>Awards:</td>
                <td><input type="text" name="awards" value="<?php echo $row['awards']?>" required/></td>
            </tr>
            <tr>
                <td>Publications:</td>
                <td><input type="text" name="publications" value="<?php echo $row['publications']?>" required/></td>
            </tr>
            <tr>
                <td>Interests:</td>
                <td><input type="text" name="interests" value="<?php echo $row['interests']?>" required/></td>
            </tr>
            <tr>
                <td colspan="2"><hr></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="SUBMIT" name="submit" /></td>
            </tr>

        </tbody>
        
    </table>
    </form> 
         <br>
    </div>
        <br><br><br><br>
</body>
</html>