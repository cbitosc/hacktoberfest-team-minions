<?php
include 'studentlogin.php';
$conn=new mysqli("localhost:3306", "root", "", "chanakya");
if($conn->connect_error)
{
    die("connection failed".$conn->connect_error);
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
                    var e="invalid email address";
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
            }    
        </script>

    </head>
    <body>
     <div class="d13">
         <form action="cvsubmit.php">   
    <table align='center' border="0" width="10" cellspacing="50" cellpadding="4">
        <thead>
            <tr>
                <th colspan="2" style="font-size:24px;font-weight: bold" align="center">CURRICULUM VITAE</th>
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
                <td><input type="text" name="name"  required/></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><input type="text" name="address" required/></td>
            </tr>
            <tr>
                <td>Contact number:</td>
                <td><input type="number" name="contactnumber" id="contactnumber" onchange="verify_cn(this.id)" required/></td>
                
            </tr>
            <tr>
                <td colspan="2" id="p2" STYLE='color: #007bff'></td>
             </tr>
            <tr>
                <td>Email:</td>
                <td><input type="text" name="email" id="email" onchange="verify_em(this.id)" required/></td>
                
            </tr>
            <tr>
                <td>Department:</td>
                <td><input type="text" name="department"  required/></td>
            </tr>
            <tr>
                <td colspan="2" id="p3" STYLE='color: #007bff'></td>
             </tr>
             <tr>
                <td colspan="2"><hr></td>
            </tr>
            <tr>
                <td colspan="2" style="font-size:20px;font-weight: bold"><b>Optional Personal Information</b></td>
            </tr>
            <tr>
                <td>DOB:</td>
                <td><input type="date" name="dob" max="2000-12-31"  required/></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td><input type="radio" name="gender" value='male' required/>male
                    <input type="radio" name="gender" value='female' required/>female
                </td>
            </tr>
            <tr>
                <td colspan="2"><hr></td>
            </tr>
            
            <tr>
                <td>Percentage:</td>
                <td><input type="number" name="percentage" min="0" max="100" required/></td>
            </tr>
            <tr>
                <td colspan="2"><hr></td>
            </tr>
            <tr>
                <td colspan="2" style="font-size:20px;font-weight: bold"><b>Others</b></td>
            </tr>
            <tr>
                <td>Awards:</td>
                <td><input type="text" name="awards" required value="none"/></td>
            </tr>
            <tr>
                <td>Publications:</td>
                <td><input type="text" name="publications"  required value="none"/></td>
            </tr>
            <tr>
                <td>Interests:</td>
                <td><input type="text" name="interests"  required value="none"/></td>
            </tr>
            <tr>
                <td colspan="2"><hr></td>
            </tr>
            <tr>
                <td colspan="2" align="center" style='color:black'><input type="submit" value="SUBMIT" name="submit" /></td>
            </tr>

        </tbody>
        
    </table>
    </form> 
         <br><br><br><br>
   </div>
        
</body>
</html>