<?php
session_start();
 include 'companylogin.php';
 $a=$_SESSION["name"];
 $conn=new mysqli("localhost:3306", "root", "", "chanakya");
 $s="select * from company where username='$a';";
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
        <script>
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
            </script>
    </head>
    <body>
     <div class="d2">
         <form action="submitdetails.php">   
    <table border="0" width="40" cellspacing="10" cellpadding="4">
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
                <td><input type="text" name="companyname" value="<?php echo $row['name']?>" required/></td>
            </tr>
            <tr>
                <td>Company Email:</td>
                <td><input type="text" name="email" id="companyemail" value="<?php echo $row['email']?>" onchange="verify_em(this.id)" required/></td>
                <td id="p3"></td>
            </tr>
            <tr>
                <td>Country:</td>
                <td><input type="text" name="companycountry" value="<?php echo $row['country']?>" required/></td>
            </tr>
            <tr>
                <td colspan="2"><b>Reqirements Information</b></td>
            </tr>
            <tr>
                <td>Departments To Be Allowed:</td>
                <td><input type="checkbox" name="companydepartments[]" value='cse' />CSE
                    <input type="checkbox" name="companydepartments[]" value="mechanical" />MECH<br>
                    <input type="checkbox" name="companydepartments[]" value="ece" />ECE
                    <input type="checkbox" name="companydepartments[]" value="it" />IT<br>
                    <input type="checkbox" name="companydepartments[]" value="eee" />EEE
                    <input type="checkbox" name="companydepartments[]" value="chemical" />CHEMICAL<br>
                    <input type="checkbox" name="companydepartments[]" value="civil" />CIVIL 
                    <input type="checkbox" name="companydepartments[]" value="mba" />MBA<br>
                    <input type="checkbox" name="companydepartments[]" value="production" />PRODUCTION
                    
                </td>
            </tr>
            <tr>
                <td>Designation:</td>
                 <td><input type="text" name="companydesignation" value="<?php echo $row['designation']?>" required/></td>
            </tr>
            <tr>
                <td>Salary(lakhs):</td>
                <td><input type="number" name="salary" required/></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="SUBMIT" name="submit" /></td>
            </tr>

        </tbody>
        
    </table>
    </form> 
    </div>
        <br><br><br><br>
</body>
</html>
