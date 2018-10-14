<?php
session_start();
	if (isset($_GET['js_var']))
        {
            $var = $_GET['js_var'];
            $name=$_SESSION["name"];
            $conn=new mysqli("localhost:3306", "root", "", "chanakya");
            if($conn->connect_error)
            {
                die("connection failed".$conn->connect_error);
            }
            $sql="insert into apply(student,company) values('$name','$var');";
            if(!$conn->query($sql))
                echo $conn->error;
            echo 'sucessfully applied';
            
        }
	else 
            $var = "<br />js_var is not set!";
        
        
?>