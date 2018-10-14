<?php
include 'studentlogin.php'
?>

<html>
    <head>
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
        function newconf()
        {
                var x=document.getElementById("passbabs").value;
                var y=document.getElementById("pa").value;
    
            if(!x.match(y))
            {
                var e="sorry,you're passwords are not matching";
                document.getElementById("td5").innerHTML=e;
            }
            else
            {
                document.getElementById("td5").innerHTML="";
            }
        }
        </script>

    </head>
    <body >
        <center>
         <div class="d11">
        <form action="changepassword.php" >
        <table border="0" width="40" cellspacing="10" cellpadding="4" >
    <tr>
        <td colspan="2" >Old Password:</td>
        <td><input type="text" name="passes" id="pass" required></td>
    </tr>
    <tr>
        <td colspan="2" >New Password:</td>
        <td><input type="text" name="passbabs" id="passbabs" required></td>
        <td colspan="4" id="td98"></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="2">Confirm Password:</td>
        <td><input type="text" name="pa" id="pa" onchange="newconf()"  required></td>
    </tr>
    <tr>
        <td colspan="2" id="td5"></td>
    </tr>
    <tr>
        <td align="center"><input type="reset" value="Reset"></td>
        <td colspan="2" align="center"><input type="submit" name="submit" value="Submit"></td>
    </tr>
    
        </table>
        </form>
             </div>
    </center>
    </body>
</html>
