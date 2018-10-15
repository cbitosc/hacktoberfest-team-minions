
<!Doctype html>
<html>
<?php

include 'header.php';
include 'studentlogin.php';
$conn=new mysqli("localhost:3306", "root", "", "chanakya");
if($conn->connect_error)
{
    die("connection failed".$conn->connect_error);
}
?>


<Script>
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
     <div class="jumbotron "  align="center">
         <form action="cvsubmit.php">   
    <table  cellspacing="50" cellpadding="4">
        <thead>
            <tr>
                <th colspan="2"  align="center">CURRICULUM VITAE</th>
            </tr>
            <tr>
                <td colspan="2"><hr></td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td colspan="2" ><b>Your Contact Information</b></td>
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
                <td colspan="2" id="p2" ></td>
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
                <td colspan="2" id="p3" ></td>
             </tr>
             <tr>
                <td colspan="2"><hr></td>
            </tr>
            <tr>
                <td colspan="2" ><b>Optional Personal Information</b></td>
            </tr>
            <tr>
                <td>DOB:</td>
                <td><input type="date" name="dob" max="2000-12-31"  required/></td>
            </tr>
            <tr>
            <div class="form-check">
  <td>Gender:</td>
 <td> <input type="radio" class="form-check-input" id="materialmle" value="male" name="gender" checked>
  <label class="form-check-label" for="materialmale" >Male  </label></td>
  <td><input type="radio" class="form-check-input" id="materialfemale" name="gender" value="female">
  
  <label class="form-check-label" for="materialfemale">Female</label></td>
</div></tr>
            <tr>
                <td colspan="2"><hr></td>
            </tr>
            
            <tr>
                <td>Percentage:</td>
                <td><input type="number" name="percentage" min="0" max="10" required/></td>
            </tr>
            <tr>
                <td colspan="2"><hr></td>
            </tr>
            <tr>
                <td colspan="2" ><b>Others</b></td>
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
   </div>
        <?php include 'footer.php' ?>

</body>
</html>