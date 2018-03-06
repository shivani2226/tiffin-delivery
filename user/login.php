<?php

require "dbconfig/config.php";
session_start();
if(isset($_POST['login']))
{		
	$userlog=$_POST['username'];
	$pswlog=$_POST['txtpsw'];
	$query="select * from registerclient where UserName='$userlog' and password='$pswlog'";
	    $query_run=mysqli_query($con,$query);
		 if(mysqli_num_rows($query_run)>0)
	   {
		   $_SESSION['uname']=$userlog;
		   header("Location: home.php"); 
		   
	   }
	   else
	   {
		   echo '<script type="text/javascript">alert("invalid credentials")</script>';
	   }
}
include "head.php";
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
document.getElementById("username").focus();
return false;
}
if(pattern.test(e)){         
		return true;  
    }else{   
		alert("Please enter valid Username..");
		document.getElementById("username").focus();
		return false;
    }
	if(f=="")
{
alert("Please enter valid Password..");
document.getElementById("txtpsw").focus();
return false;
}
}
</script>
</head>
<body background="pics/img18.jpg">
<form method="post"><br>
<div class="container-fluid">
<br><br>
<div class="row">
<div class="col-sm-3">&nbsp;</div>
<div class="col-sm-6">
<div class="panel-body">
				<div class="panel panel-custom-horrible-red" style="margin-top:15px";>
   <div class="panel-heading">
      <h3 class="panel-title text-center">LOGIN</h3>
   </div>
					<div class="panel-body">
					
					<center><img src="pics/img14.jpg" alt="Chicago" width="100" height="100"></center><br>
					<center>Please&nbsp;<a href="login.php"> Login </a>&nbsp;or&nbsp;<a href="reg.php"> Register </a></center></p>
					<label>Username</label>
					<div class="input-group">
    <input class="form-control" placeholder="Enter Your Username.." type="email" name="username"  id="username"/>
    <span class="input-group-addon">
       <i class="glyphicon glyphicon-envelope"></i>
    </span>
</div>
					<!--<div class="form-group">
							<label>Username</label>
							
							<input class="form-control" placeholder="Enter Your Username.." type="email" name="username"  id="username">
							<i class="glyphicon glyphicon-envelope"></i></input>
						</div>-->
							<label>Password</label>
					<div class="input-group">
    <input class="form-control" placeholder="Enter Your Password.." type="password" name="txtpsw" id="psw" />
    <span class="input-group-addon">
       <i class="glyphicon glyphicon-lock"></i>
    </span>
</div>	<br>			
					
						
						<!--<div class="form-group">
							<label>Password</label>
							<input class="form-control" placeholder="Enter Your Password.." type="password" name="txtpsw" id="psw"  />
						</div>-->
						<div class="form-group">
						
						<center><input style="width:120px;background-color:#696969;margin-top:1px" class="btn btn-primary" type="submit" value="Login" name="login" onclick="return fun1()"/></center>
						
						
							
						
						
						</div><br>
					&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&nbsp;&nbsp;&emsp;&emsp;&nbsp;&nbsp;
						
						Don't have an account?<a href="reg.php">Register now</a>
					
						
						
						</div>
					</div>
</div>
</div>
<div class="col-sm-3">&nbsp;</div>
</div>
</div>


</form>
</body>
</html>