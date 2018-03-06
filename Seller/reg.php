 <?php 
 require "dbconfig/config.php";
 session_start();
 include ("functions/functionreg.php");
 include ("functions/functionhotelreg.php");
 
 
 ?>
 <html>
<head>
<link rel="stylesheet" href="styles.css"/>
<link href="bootstrap.min.css" rel="stylesheet" />
<script src="bootstrap.min.js" type="text/javascript"></script>
<script src="jquery.min.js" type="text/javascript"></script>
<script type="text/javascript"></script>
</head>
<body background="img7.jpg">
<?php 
include "headproject.php";
?>
<form method="post"><br><br>
<div class="row">
<div class="col-sm-6">

<div class="row">
<div class="col-sm-1"></div>
		<div class="col-sm-11">
		<div class="panel panel-default">
		<div class="panel-heading" style="color:black;font-size:25px;">Registeration</div>
		<div class="panel-body">
				<div class="panel panel-default"  style="background-color:'#cccccc'">
						<div class="panel-body">
		<?php include ("mp.php"); ?>
		<br>
		
		
		<script type="text/javascript">
  function fun1()
{
	var a=document.getElementById("sellername").value;
var b=document.getElementById("hotname").value;
var c=document.getElementById("hotadd").value;
var d=document.getElementById("hotcon").value;
var e=document.getElementById("hotemail").value;
var f=document.getElementById("hotlat").value;
var g=document.getElementById("hotlong").value;

var pattern=/^([a-zA-Z0-9_.-])+@([a-zA-Z0-9_.-])+\.([a-zA-Z])+([a-zA-Z])+/;
if(a=="")
{
alert("Please enter your name..");
document.getElementById("sellername").focus();
return false;
}
if(b=="")
{
alert("Please enter Hotel Name..");
document.getElementById("hotname").focus();
return false;
}
if(c=="")
{
alert("Please enter Hotel Address..");
document.getElementById("hotadd").focus();
return false;
}
if(d=="")
{
alert("Please enter Contact Number..");
document.getElementById("hotcon").focus();
return false;
}
if(e=="")
{
alert("Please enter Email..");
document.getElementById("hotemail").focus();
return false;
}
if(pattern.test(e)){         
		return true;  
    }else{   
		alert("Please enter valid Email..");
		document.getElementById("hotemail").focus();
		return false;
    }
	if(f=="")
{
alert("Please enter Hotel Latitude..");
document.getElementById("hotlad").focus();
return false;
}
if(g=="")
{
alert("Please enter Hotel Longitude..");
document.getElementById("hotlong").focus();
return false;
}
}

</script>
						
						
						<div class="form-group" style="color:black">
						<label>Owner Name</label>
						<input class="form-control" placeholder="Owner Name.." type="text" name="sellername" id="sellername"></input>
						</div>
						<div class="form-group" style="color:black">
							<label>Hotel Name</label>
							<input class="form-control" placeholder="Hotel Name.." type="text" name="hotelname" id="hotname" />
						</div>
						<div class="form-group" style="color:black">
							<label>Address</label>
							<input class="form-control" placeholder="Address.." type="text" name="address" id="hotadd"/>
						</div>
						<div class="form-group" style="color:black">
							<label>Contact</label>
							<input class="form-control" placeholder="Contact.." type="text" name="hotelcontact" id="hotcon" />
						</div>
						<div class="form-group" style="color:black">
							<label>Email</label>
							<input class="form-control" placeholder="Email.." type="email" name="hotelemail" id="hotemail"/>
						</div>
						
						<div class="form-group" style="color:black">
							<label>Latitude</label>
							<input class="form-control" placeholder="Latitude.." type="text" name="hotellat" id="hotlad"/>
						</div>
						<div class="form-group" style="color:black">
							<label>Longitude</label>
							<input class="form-control" placeholder="Longitude.." type="text" name="hotellong" id="hotlong"/>
						</div>
			
<input type="submit" name="btnadlog" value="Submit" style="background-color:black"/>
		
		</div>
		</div>
		</div>
		
		
		
			 <?php reg(); ?>
			 </div>
			 </div>
			 </div>
			 </div>
			  <div class="col-sm-6">
			  <div class="row">
			  <div class="col-sm-3"></div>
				<div class="col-sm-8">
			  <div class="panel panel-default" style="font-size:20px;color:black">
			 <div class="panel-heading" style="font-size:25px;color:black">Your Registerd Hotels</div>
			  
			 <?php hotelreg(); ?>
			 
			 </div>
			 </div>
			 </div>
			 </div>
			
			 
</div>
</div>
</form>
</body>
</html>