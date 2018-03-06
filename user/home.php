<?php 
require "dbconfig/config.php";
session_start();
if(empty($_SESSION['uname']))
{     
 header("Location:login.php");
	exit();
}

   
 


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      font: 400 15px/1.8 Lato, sans-serif;
      color: #777;
  }
  h3, h4 {
	  font-size:50px;
	  font-family:Times-New-Roman;
      margin: 10px 0 30px 0;
      letter-spacing: 5px;      
      
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
  .carousel-inner img {
     
      width: 100%; /* Set width to 100% */
      margin: auto;
  }
  .carousel-caption h3 {
      color: #fff !important;
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
  .modal-header, h4, .close {
      background-color: #333;
      color: #fff !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-header, .modal-body {
      padding: 40px 50px;
  }
  .nav-tabs li a {
      color: #777;
  }
  #googleMap {
      width: 100%;
      height: 400px;
      -webkit-filter: grayscale(100%);
      filter: grayscale(100%);
  }  
  .navbar {
      font-family: Montserrat, sans-serif;
      margin-bottom: 0;
      background-color: #2d2d30;
      border: 0;
      font-size: 11px !important;
      letter-spacing: 4px;
      opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
      color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
      color: #fff !important;
  }
  .navbar-nav li.active a {
      color: #fff !important;
      background-color: #29292c !important;
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
  footer {
      background-color: #2d2d30;
      color: #f5f5f5;
      padding: 32px;
  }
  footer a {
      color: #f5f5f5;
  }
  footer a:hover {
      color: #777;
      text-decoration: none;
  }  
  .form-control {
      border-radius: 0;
  }
  textarea {
      resize: none;
  }
  </style>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">



<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="pics/img7.jpg" alt="New York" width="1200" height="700">     
      </div>

      <div class="item">
        <img src="pics/img8.jpg" alt="Chicago" width="1200" height="700">
              
      </div>
    
      <div class="item">
        <img src="pics/img9.jpg" alt="Los Angeles" width="1200" height="700">
           
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
<?php 
include "headproject.php";
?>
<!-- Container (The Band Section) -->
<div id="band" class="container text-center">
  <h3>TIFFIN SERVICE</h3>
  <p><em>We love food!</em></p>
  <p>We have created a tiffin service website. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
  <br>
</div>

<!-- Container (TOUR Section) -->
<div id="tour" class="bg-1">
  <div class="container">
    
    <div class="row text-center">
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="pics/img3.png" alt="Paris" width="400" height="300">
          <p><strong>Pav bhaji</strong></p>
          
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="pics/img4.jpg" alt="New York" width="400" height="300">
          <p><strong>Burger</strong></p>
          
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="pics/img5.jpg" alt="San Francisco" width="400" height="300">
          <p><strong>Chowmein</strong></p>
        </div>
      </div>
    </div>
  </div>
  
 
<!-- Container (Contact Section) -->
<form>
<div id="contact" class="container">
<div class="row">

  <h3 class="text-center">Contact Us At</h3>
 
  
  <p class="text-center"><em>Love For Food!!</em></p>
  
      <p class="text-center">Complaint? Drop a note.</p>
      <p class="text-center"><span class="glyphicon glyphicon-map-marker"></span>Lucknow, India</p>
      <p class="text-center"><span class="glyphicon glyphicon-phone"></span>Phone: +00 1515151515</p>
      <p class="text-center"><span class="glyphicon glyphicon-envelope"></span>Email: shivani26.srivastav@gmail.com</p>
   
   
  
	<!-- <script type="text/javascript">
  function fun1()
{
var a=document.getElementById("name").value;
var b=document.getElementById("email").value;
var c=document.getElementById("comments").value;

var pattern=/^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/;
if(a=="")
{
alert("Please enter your name..");
document.getElementById("name").focus();
return false;
}
if(pattern.test(a)){         
		return true;  
    }else{   
		alert("Please enter valid name..");
		document.getElementById("name").focus();
		return false;
    }

if(b=="")
{
alert("Please enter Email..");
document.getElementById("email").focus();
return false;
}
if(pattern.test(b)){         
		return true;  
    }else{   
		alert("Please enter valid Email..");
		document.getElementById("email").focus();
		return false;
    }
if(c=="")
{
alert("Please enter Comment");
document.getElementById("comments").focus();
return false;
}

}

</script>

</div>
    <div class="col-md-8">
	
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <input class="btn pull-right" type="submit" name="send" value="Send" onclick="return fun1()"/>
        </div>
      </div> 
	-->
	   <?php
if (isset($_POST["send"])) 
{
//$id=$_GET["client_id"];
//$resd=mysqli_query($con,"select * from reviews where UserName='".$_SESSION["uname"]."'");
	$uemail=$_POST["email"];
	$cmt=$_POST["comments"];
	$user=$_POST["name"];
	
	
	//$id=$rowa["client_id"];
	//$email=$row2["email"];
	
	//$quantity=1;
	//$uname=$_SESSION['uname'];
//$qu=mysqli_query($con,"insert into reviews values('','','$user','$uemail','$cmt')");
	//echo '<script type="text/javascript"> alert("Comment Added")</script>';
	 $query="insert into reviews values('','','$user','$uemail','$cmt')";
		   $query_run=mysqli_query($con,$query);
		   if($query_run)
		   {
			   echo '<script type="text/javascript"> alert("Comment registered")</script>';
			
		   }
		   else
		   {
			   echo '<script type="text/javascript"> alert("Error")</script>';
		   }

}



?>
    </div>
  </div>
  

 
</form>

</body>
</html>
