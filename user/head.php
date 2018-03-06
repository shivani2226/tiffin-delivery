<?php
require "dbconfig/config.php";
?>	
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Just Eat</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 400 15px/1.8 Lato, sans-serif;
      color: #777;
  }
 
 
 

   
  .navbar {
      font-family: Montserrat, sans-serif;
      margin-bottom: 0;
      background-color:  #2d2d30;
      border: 0;
      font-size: 11px !important;
      letter-spacing: 4px;
      opacity: 0.9;
  }
  .topnav {
  overflow: hidden;
  background-color: #333;
  font-family:Times-New-Roman;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 15px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav .icon {
  display: none;
}
  


  </style>
</head>
<div id="main">
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
      </button>
	  </div>
	
	
	
	
	
     <div class="row">
	<div class="col-sm-5">&nbsp;</div>
	<div class="col-sm-2">
  <div class="collapse navbar-collapse" id="myNavbar" style="font-size:30px;font-family:Times-New-Roman;margin-top:7px;color:#ddd">Just&nbsp;&nbsp;Eat</div>
	</div>
	<div class="col-sm-4"></div>
	<div class="col-sm-1">
	<div class="topnav" id="myTopnav">
<a href="login.php">Login</a>
</div>
	
	</div>


 </div>

</nav>
</body>
</div>
</html>
