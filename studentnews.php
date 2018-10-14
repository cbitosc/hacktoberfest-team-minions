<!DOCTYPE html>
<html lang="en">
<?php include 'header.php' ?>
<body>
            <?php
session_start();
include 'studentlogin.php';
$name=$_SESSION["name"];
$conn=new mysqli("localhost:3306", "root", "", "chanakya");
if($conn->connect_error)
{
    die("connection failed".$conn->connect_error);
}
$sql="select department de from student where username='$name';";
if(($r=$conn->query($sql))== false)
        echo $conn->error;
$i=$r->fetch_assoc();
$sql1="select c.*
        from company c
        where department like '%$i[de]%' and c.name not in (select company from apply where student='$name');";
if(($r=$conn->query($sql1))== false)
        echo $conn->error;
else 
{
    if($r->num_rows)
    {
    while($i=$r->fetch_assoc())
    {  
       echo "<html><body style=''><div class='d1'><br><form action='process.php'>
       <table align='center' width='10' cellspacing='7' cellpadding='5'>
       <tr>
               <td colspan='2'><b>Company Name:</b></td>
               <td>$i[name]</td>
       </tr>
       <tr>
               <td colspan='2'><b>Country:</b></td>
               <td>$i[country]</td>
       </tr>
       <tr>
               <td colspan='2'><b>Designation:</b></td>
               <td>$i[designation]</td>
       </tr>
       <tr>
               <td colspan='2'><b>Salary(lakhs per annum):</b></td>
               <td>$i[salary]</td>
       </tr>
       <tr><td colspan='3'><hr></td></tr>
       <tr>
            <td colspan='3'><input type='button' id='$i[name]' onclick='apply(this.id)' value='apply' /></td>
       </tr>
       </table></form><br>
       </div></body></html>";
       
    }
    }
 else {
        echo "<html><body style=''><div class='d1'><br>No companies present to apply please visit again
            <br><br></div></body></html>";
    }
}
?>
     <script type="text/javascript">
		function apply(x)		
                
		 {			
			var xhr= new XMLHttpRequest(); 
				

			var url = 'process.php?js_var=' + x;
			xhr.open('GET', url, false);
			xhr.onreadystatechange = function () {
				if (xhr.readyState===4 && xhr.status===200) {
					alert(xhr.responseText);
				}
			}
			xhr.send();
                        return true;
		}
    </script>
      
      <?php include 'footer.php' ?>
        </body>
    
</html>