<?php
session_start();
include 'header.php';
 include 'companylogin.php';
 $a=$_SESSION["name"];
 $conn=new mysqli("localhost:3306", "root", "", "chanakya");
 ?>

<html>
    <head>
    <title> </title>
    <!-- <link rel="stylesheet" href="external.css"> -->
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
                function valthis() 
                {
                    var checkBoxes = document.getElementsById("companydepartments");
                    var isChecked = false;
                    for (var i = 0; i < checkBoxes.length; i++) 
                    {
                        if ( checkBoxes[i].checked ) 
                        {
                            isChecked = true;
                        }
                    }
                    if (! isChecked ) {
                        alert("please tick alteast one box");
                    }
                }

            </script>
    </head>
    <body>
     <div class="jumbotron" style="height:100vh;" align="center">
         <form action="submitdetails.php" onsubmit="valthis()">   
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
                <td><input type="text" name="companyname" required/></td>
            </tr>
            <tr>
                <td>Company Email:</td>
                <td><input type="text" name="email" id="companyemail" onchange="verify_em(this.id)" required/></td>
                <td id="p3"></td>
            </tr>
            <tr>
                <td>Country:</td>
                <td><input type="text" name="companycountry"  required/></td>
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
                 <td><input type="text" name="companydesignation"  required/></td>
            </tr>
            <tr>
                <td>Salary(lakhs):</td>
                <td><input type="text" name="salary" required/></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="SUBMIT" name="submit" /></td>
            </tr>

        </tbody>
        
    </table>
    </form> 
    </div>
        <?php include "footer.php"?>
</body>
</html>
