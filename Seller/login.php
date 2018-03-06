<?php 
session_start();
require "dbconfig/config.php";
if(isset($_POST['login']))
{		
	$userlog=$_POST['txtuname'];
	$pswlog=$_POST['txtpsw'];
	$query="select * from registeruser where Username='$userlog' and Password='$pswlog'";
	    $query_run=mysqli_query($con,$query);
		 if(mysqli_num_rows($query_run)>0)
	   {
		   $row=mysqli_fetch_array($query_run);
		   $id=$row['userid'];
		   $_SESSION['uname']=$userlog;
		  
		   header("Location:home.php?userid=$id");
	   }
	   else
	   {
		   echo '<script type="text/javascript">alert("invalid credentials")</script>';
	   }
}
if(isset($_POST['reg']))
{
	$username=$_POST['uname'];
	$email=$_POST['email'];
	$password=$_POST['psw'];
	$mobile=$_POST['mobile'];
	$pic="";
       $query="select * from registeruser WHERE Username='$username' and Email='$email'";
	   $query_run=mysqli_query($con,$query);
	   if(mysqli_num_rows($query_run)>0)
	   {
		   echo '<script type="text/javascript">alert("User already exists")</script>';
	   }
	   else
	   {
		   $query="insert into registeruser values('','$username','$email','$password','$mobile')";
		   $query_run=mysqli_query($con,$query);
		   if($query_run)
		   {
			   echo '<script type="text/javascript"> alert("User registered")</script>';
			   
		   }
		   else
		   {
			   echo '<script type="text/javascript"> alert("Error")</script>';
		   }
	   }
}

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
      color: black;
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
  </style>
  <script type="text/javascript">
  function fun1()
{
	var e=document.getElementById("txtuname").value;
var f=document.getElementById("txtpsw").value;
var pattern=/^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/;
if(e=="")
{
alert("Please enter valid Username..");
document.getElementById("txtuname").focus();
return false;
}
if(pattern.test(e)){         
		return true;  
    }else{   
		alert("Please enter valid Username..");
		document.getElementById("txtuname").focus();
		return false;
    }
	if(f=="")
{
alert("Please enter valid Password..");
document.getElementById("txtpsw").focus();
return false;
}
}
function fun()
{

var a=document.getElementById("username").value;
var b=document.getElementById("email").value;
var c=document.getElementById("psw").value;
var d=document.getElementById("mob").value;
var pattern=/^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/;
if(a=="")
{
alert("Please enter valid Username..");
document.getElementById("username").focus();
return false;
}
if(pattern.test(a)){         
		return true;  
    }else{   
		alert("Please enter valid Username..");
		document.getElementById("username").focus();
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
		alert("Please enter valid Username..");
		document.getElementById("username").focus();
		return false;
    }
if(c=="")
{
alert("Please enter Password..");
document.getElementById("psw").focus();
return false;
}
if(d=="")
{
alert("Please enter Mobile Number..");
document.getElementById("mob").focus();
return false;
}
}
</script>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50" background="img7.jpg">
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#myPage">JUST EAT</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        
        
         <div class="navbar-brand" id="wrap" style="font-size:10px;font-family: Montserrat, sans-serif"">
 <form method="post">
           <fieldset>
             <label name="email">Email</label>
             <input type="email" name="txtuname" id="txtuname" style="color:black;width:70px"/>
             <label name="password">Password</label>
             <input type="password" name="txtpsw" id="txtpsw" style="color:black;width:70px"/>
             <input type="submit" value="GO" class="btn" style="align:center;height:28px;font-size:10;padding:1px;px;background-color=black" name="login" onclick="return fun1()"/>
           </fieldset>
     </form>   
       
        </li>
       
      </ul>
    </div>
  </div>
</nav>
<br><br>

<form method="post">
<div class="container-fluid">


<div class="row">
<div class="col-sm-3" style="font-size:20px;color:black"></div>
<div class="col-sm-2" style="font-size:20px;color:black"><label></label></div><br><br>
</div>
<div class="col-sm-11"></div>
</div>
<div class="row">
<div class="col-sm-1"></div>
<div class="col-sm-6">
				<div class="col-sm-12"></div>
				<div class="row">
<div class="col-sm-12"></div>
<div class="col-sm-12"></div>

				
					<div class="panel panel-default">
					<div class="panel-heading" style="font-size:20px;color:black">Register Here</div>
					<div class="panel-body">
					<div class="panel panel-default"  style="background-color:'#cccccc'">
					<div class="panel-body">
					<div class="form-group" style="color:black">
							<label>Username</label>
							<input class="form-control" placeholder="Enter Your Username.." type="email" name="uname" id="username"/>
						</div>
						<div class="form-group" style="color:black">
							<label>Email</label>
							<input class="form-control" placeholder="Enter Your Email.." type="email" name="email" id="email"/>
						</div>
						<div class="form-group" style="color:black">
							<label>Password</label>
							<input class="form-control" placeholder="Enter Your Password.." type="password" name="psw" id="psw" />
						</div>
						<div class="form-group" style="color:black">
							<label>Mobile</label>
							<input class="form-control" placeholder="Enter Your Mobile Number.." type="text" name="mobile" id="mob" />
						</div>
						<div class="row">
						<div class="col-sm-4"></div>
						<div class="col-sm-4">
						<div class="form-group">
							<input style="width:120px;background-color:'black'" class="btn" type="submit" value="Register" name="reg" onclick="return fun()"/>
						</div>
						</div>
						
					</div>
					</div>
						</div>
						
					</div>
		
</div>
</div>

</form>
</body>
</html>
