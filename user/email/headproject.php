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
  h3, h4 {
      margin: 10px 0 30px 0;
      letter-spacing: 10px;      
      font-size: 20px;
      color: #111;
  }
  .container {
      padding: 80px 120px;
  }
  .person {
      border: 10px solid transparent;
      margin-bottom: 25px;
      width: 80%;
      height: 80%;
      opacity: 0.7;
  }
  .person:hover {
      border-color: #f1f1f1;
  }
  
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .bg-1 {
      background: #2d2d30;
      color: #bdbdbd;
  }
  .bg-1 h3 {color: #fff;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
      border-top-right-radius: 0;
      border-top-left-radius: 0;
  }
  .list-group-item:last-child {
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail p {
      margin-top: 15px;
      color: #555;
  }
  .btn {
      padding: 10px 20px;
      background-color: #333;
      color: #f1f1f1;
      border-radius: 0;
      transition: .2s;
  }
  .btn:hover, .btn:focus {
      border: 1px solid #333;
      background-color: #fff;
      color: #000;
  }
 
  .nav-tabs li a {
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
  .navbar li a, .navbar .navbar-brand { 
      color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
      color:white !important;
  }
  .navbar-nav li.active a {
      color: #fff !important;
      background-color:#0059b3 !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
  }
  .open .dropdown-toggle {
      color: #fff;
      background-color: #555 !important;
  }
  .dropdown-menu li a {
      color: #000 !important;
  }
  .dropdown-menu li a:hover {
      background-color: red !important;
  }
  
  .form-control {
      border-radius: 0;
  }
  textarea {
      resize: none;
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
  font-size: 20px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }

}
.search{
	width:120px;
	padding:2px;
	font-size:17px;
	text-align:center;
	margin-top:14px;
	height:30px;
}
.sidenav {
    height: 100%; /* 100% Full-height */
    width: 0; /* 0 width - change this with JavaScript */
    position: fixed; /* Stay in place */
    z-index: 1; /* Stay on top */
    top: 0;
    left: 0;
    background-color: #111; /* Black*/
    overflow-x: hidden; /* Disable horizontal scroll */
    padding-top: 60px; /* Place content 60px from the top */
    transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
}

/* The navigation menu links */
.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s
}

/* When you mouse over the navigation links, change their color */
.sidenav a:hover, .offcanvas a:focus{
    color: #f1f1f1;
}

/* Position and style the close button (top right corner) */
.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

/* Style page content - use this if you want to push the page content to the right when you open the side navigation */
#main {
    transition: margin-left .5s;
    padding: 20px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}
.glyphicon
{
	font-size: 12px;
}
.search{
	

::-webkit-input-placeholder { color:#f00; }
::-moz-placeholder { color:#f00; } /* firefox 19+ */
:-ms-input-placeholder { color:#f00; } /* ie */
input:-moz-placeholder { color:#f00; }
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
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
	  </div>
      <div class="row">
	  	
<div class="col-sm-2" style="font-size:12px;font-family:Times-New-Roman;margin-top:23px;color:#ddd">More Options<span onclick="openNav()"><i class="glyphicon glyphicon-chevron-right"></i></span></div>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="hoteldetails.php" style="font-size:20px;">Hotels</a>
  
  <a href="home.php#contact" style="font-size:20px;">Contact</a>

  <a href="logout.php" style="font-size:20px;">Logout</a>
   <a href="shown.php" style="font-size:20px;">Map</a>
 
</div>


  
  <script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
function openNav() {
    document.getElementById("mySidenav").style.width = "	150px";
    document.getElementById("main").style.marginLeft = "10px";
}

/* Set the width of the side navigation to 0 and the left margin of the page content to 0 */
function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
}
</script>

	<div class="col-sm-2">
    <div class="collapse navbar-collapse" id="myNavbar" style="font-size:30px;font-family:Times-New-Roman;margin-top:4px;color:#ddd"><center>Just&nbsp;&nbsp;Eat</center></div>
	</div>
	<div class="col-sm-4"></div>
	<div class="col-sm-4">
<div class="topnav" id="myTopnav">
<a href="internship/home.php"><span class="glyphicon glyphicon-home"></span> Home</a>

<a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a>
  <form action="s.php" method="get" enctype="multipart/form-data">
  
    
<input type="text" name="user_query" placeholder="search" class="search" style="border-radius:20px;width:120px"></input>
      <input type="submit" name="search" value="Search" style="border:none;background-color:#777;color:white;display:inline-block;padding: 2px 5px;font-size: 14px;"/>
      </form>
</div>
 </div>
 </div>
</nav>
</body>
</div>
</html>
