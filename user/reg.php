<?php
session_start();
require "dbconfig/config.php";
include "head.php";
if(isset($_POST['reg']))
{
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['psw'];
	$mobile=$_POST['mobile'];
	
	  $query="select * from registerclient WHERE UserName='$username' and email='$email'";
	   $query_run=mysqli_query($con,$query);
	   if(mysqli_num_rows($query_run)>0)
	   {
		   echo '<script type="text/javascript">alert("client already exists")</script>';
	   }
	   else
	   {
		   $query="insert into registerclient values('','$username','$email','$password','$mobile')";
		   $query_run=mysqli_query($con,$query);
		   if($query_run)
		   {
			   echo '<script type="text/javascript"> alert("Client registered")</script>';
			
		   }
		   else
		   {
			   echo '<script type="text/javascript"> alert("Error")</script>';
		   }
	   }
}
?>
<html>
<head>
<style>
.panel-custom-horrible-red {
    border-color: #ddd;
}
.panel-custom-horrible-red > .panel-heading {
    background: #696969; 
    color: #ddd;
    border-color: #ddd;
	font-color:#8B0000;
}
hr.style18 { 
  height: 30px; 
  border-style: solid; 
  border-color: #8c8b8b; 
  border-width: 1px 0 0 0; 
  border-radius: 20px; 
} 
hr.style18:before { 
  display: block; 
  content: ""; 
  height: 30px; 
  margin-top: -31px; 
  border-style: solid; 
  border-color: #8c8b8b; 
  border-width: 0 0 1px 0; 
  border-radius: 20px; 
}

</style>
<script type="text/javascript">
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
<body background="pics/img19.jpg">
<form method="post">
<div class="container-fluid">
<br><br><br>
<div class="row">
<div class="col-sm-3">&nbsp;</div>
<div class="col-sm-6">
<div class="panel-body">
				<div class="panel panel-custom-horrible-red" style="margin-top:15px";>
   <div class="panel-heading">
      <h3 class="panel-title text-center">Register</h3>
   </div>
					<div class="panel-body">
					<div class="row">
					<div class="col-sm-12">
					<img src="pics/img15.jpg" alt="Chicago" width="300" height="300">&nbsp;&nbsp;
					<label style="font-size:25px;font-family:cursive;">TIFFIN SERVICE<hr class="style18">Get instant<br> food in 15<br> minutes</label>
			</div>
					</div>
							<label>Username</label>
							<div class="input-group">
    <input class="form-control" placeholder="Enter Your Username.." type="email" name="username"  id="username"/>
    <span class="input-group-addon">
       <i class="glyphicon glyphicon-user"></i>
    </span>
</div>
						
						
							<label>Email</label>
							<div class="input-group">
    <input class="form-control" placeholder="Enter Your Email.." type="email" name="email" id="email"/>
    <span class="input-group-addon">
       <i class="glyphicon glyphicon-envelope"></i>
    </span>
</div>
							
							<label>Password</label>
							<div class="input-group">
    <input class="form-control" placeholder="Enter Your Password.." type="password" name="psw" id="psw"/>
    <span class="input-group-addon">
       <i class="glyphicon glyphicon-lock"></i>
    </span>
</div>
							
							
							<label>Mobile</label>
							<div class="input-group">
    <input class="form-control" placeholder="Enter Your Mobile Number.." type="text" name="mobile" id="mob"/>
    <span class="input-group-addon">
       <i class="glyphicon glyphicon-earphone"></i>
    </span>
</div><br>
							
						
						<div class="form-group">
							<center><input style="width:120px;background-color:#696969;color:white" class="btn btn-default" type="submit" value="Register" name="reg" onclick="return fun()"/></center>
							
						</div>
						
						
						
</div>
</div>
<div class="col-sm-3">&nbsp;</div>
</div>
</div>


</form>
</body>
</html>