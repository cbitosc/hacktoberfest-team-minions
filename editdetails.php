<!Doctype html>
<?php
include 'header.php';
include 'footer.php';
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
    echo "<html><body><div style='position:relative;
    left:10px;
    top:30px;
    width:450px;
    font-weight:bold;
    text-shadow:4px 4px 8px white;'>No details present to edit<a href='createdetails.php'> click here</a> to create</div><?php include 'footer.php'; ?></body></html>";
    exit();    
}

?>
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
     <div class="jumbotron" style='height:100vh' align='center'>
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
                <td><!-- Material unchecked -->
                <div class="form-check">
    <input type="checkbox" class="form-check-input" name="companydepartments[]" id="companydepartments" value="cse">
    <label class="form-check-label" for="companydepartments">Cse</label>
</div>
<div class="form-check">
    <input type="checkbox" class="form-check-input" name="companydepartments[]" id="companydepartments1" value="ece">
    <label class="form-check-label" for="companydepartments1">ece</label>
</div>
<div class="form-check">
    <input type="checkbox" class="form-check-input" name="companydepartments[]" id="companydepartments2" value="mech">
    <label class="form-check-label" for="companydepartments2">Mech</label>
</div>
<div class="form-check">
    <input type="checkbox" class="form-check-input" name="companydepartments[]" id="companydepartments3" value="eee">
    <label class="form-check-label" for="companydepartments3">eee</label>
</div>
<div class="form-check">
    <input type="checkbox" class="form-check-input" name="companydepartments[]" id="companydepartments4" value="it">
    <label class="form-check-label" for="companydepartments4">it</label>
</div>
<div class="form-check">
    <input type="checkbox" class="form-check-input" name="companydepartments[]" id="companydepartments5" value="chemical">
    <label class="form-check-label" for="companydepartments5">chemical</label>
</div>
<div class="form-check">
    <input type="checkbox" class="form-check-input" name="companydepartments[]" id="companydepartments6" value="civil">
    <label class="form-check-label" for="companydepartments6">civil</label>
</div>

                <td id="p1"></td>
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
        <?php include 'footer.php' ?>
</body>
</html>
