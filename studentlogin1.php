<?php
session_start();?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="external.css">
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: black;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

li.dropdown {
    display: ruby;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #28ff00}

.dropdown:hover .dropdown-content {
    display: block;
}

</style>
</head>
<body class="b1">
        <h1 id="he1">TRAINING AND PLACEMENT CELL</h1>
    <ul>
              <li><a href="studentprofile.php">Profile</a></li>
        <li><a href="studenthome.php">Home</a></li>
        <li><a href="studentnews.php">News</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Curriculum Vitae</a>
    <div class="dropdown-content">
      <a href="createcv.php">Create CV</a>  
      <a href="viewcv.php">View CV</a>
      <a href="editcv.php">Edit CV</a>
      <a href="removecv.php">Remove CV</a>
  </li>
  <li>
      <div class="d4"> 
      <a href="logout.php">Logout</a>
      </div>
  </li>
 
  
</ul>
</body>
</html>





