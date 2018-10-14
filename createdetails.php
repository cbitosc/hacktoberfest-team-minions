<?php
session_start();
 include 'companylogin.php';
 $a=$_SESSION["name"];
 $conn=new mysqli("localhost:3306", "root", "", "chanakya");
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
     <div class="d2">
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
                <td><input type="checkbox" name="companydepartments[]" id="companydepartments" value="cse"  />CSE
                    <input type="checkbox" name="companydepartments[]" id="companydepartments" value="mechanical" />MECH<br>
                    <input type="checkbox" name="companydepartments[]" id="companydepartments" value="ece" />ECE
                    <input type="checkbox" name="companydepartments[]" id="companydepartments" value="it" />IT<br>
                    <input type="checkbox" name="companydepartments[]" id="companydepartments" value="eee" />EEE
                    <input type="checkbox" name="companydepartments[]" id="companydepartments" value="chemical" />CHEMICAL<br>
                    <input type="checkbox" name="companydepartments[]" id="companydepartments" value="civil" />CIVIL 
                    <input type="checkbox" name="companydepartments[]" id="companydepartments" value="mba" />MBA<br>
                    <input type="checkbox" name="companydepartments[]" id="companydepartments" value="production" />PRODUCTION
                    
                </td>
                <td id="p1"></td>
            </tr>
            <tr>
                <td>Designation:</td>
                 <td><input type="text" name="companydesignation"  required/></td>
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
