<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
     
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    
     .jumbotron {
      margin-bottom: 0;
      background-color: #fcee01;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    #he1{
    text-align:center;
    text-shadow:4px 4px 8px black;
    color: blue;
    font-size: 60px;
    font-weight: bold;
}
i.dropdown {
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
<body style="background-color: #000000;opacity: 0.9">

<div class="jumbotron">
  <div class="container text-center">
    <h1 id="he1">Training and Placement Cell</h1>      
    <p>Mission, Vision & Results</p>
  </div>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
          <li ><a href="studenthome.php">Home</a></li>
          <li ><a href="studentnews.php">News</a></li>
        <li class="dropdown" >
    <a href="javascript:void(0)" class="dropbtn" >Curriculum Vitae</a>
    <div class="dropdown-content">
      <a href="createcv.php">Create CV</a>  
      <a href="viewcv.php">View CV</a>
      <a href="editcv.php">Edit CV</a>
      <a href="removecv.php">Remove CV</a>
  </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
          <li><a href="studentprofile.php"><span class="glyphicon glyphicon-user"></span> Your Account</a></li>
          <li><a href="logout.php"><span class="glyphicon glyphicon-shopping-cart"></span>Logout</a></li>
      </ul>
    </div>
  </div>
</nav>



</body>
</html>
