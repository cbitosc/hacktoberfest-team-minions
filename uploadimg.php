<?php
session_start();
$name=$_SESSION["name"];
if(isset($_POST["submit"])){
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));
        $dbHost     = 'localhost:3306';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName     = 'chanakya';
        
        $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
        
        if($db->connect_error){
            die("Connection failed: " . $db->connect_error);
        }
        
        $dataTime = date("Y-m-d");
      
        $insert = $db->query("INSERT into image(username,img) VALUES ('$name', '$imgContent')");
        if($insert){
            if($_SESSION["type"]=='student')
                include 'studenthome.php';
            else {
                include 'companyhome.php';
            }
        }else{
            echo "File upload failed, please try again.";
        } 
    }else{
        echo "Please select an image file to upload.";
        include 'upload.php';
    }    
}
