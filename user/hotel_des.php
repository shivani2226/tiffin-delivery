<?php
require "dbconfig/config.php";
session_start();

if(empty($_SESSION['uname']))
{
	header("Location:login.php");
	exit();
}
$hid=$_GET["hotelid"];
$query=mysqli_query($con,"select * from registerhotel where hotelid=$hid");
	$row1=mysqli_fetch_array($query);
	$hname=$row1["HotelName"];
	$sname=$row1["Sellername"];
	$haddress=$row1["HotelAddress"];
	$cont=$row1["Contact"];
	$em=$row1["HotelEmail"];
	
	
?>
<html>
<head>
<style>
.a {
	 text-align: center;
      
  }
  p.double {border-style: double;}
</style>
</head>
<link rel="stylesheet" href="styles.css"/>
<link href="bootstrap.min.css" rel="stylesheet" />
<script src="bootstrap.min.js" type="text/javascript"></script>
<script src="jquery.min.js" type="text/javascript"></script>
<script type="text/javascript"></script>
</head>
<body>
<?php 
include "carousel.php";
?>
<form method="post"><br><br>
<div class="row">
<div class="col-sm-3">&nbsp;</div>
<div class="col-sm-6">
<p class="double"></p>
<div class="panel-body">
				<div class="panel panel-default"  style="background-color:'#cccccc'">
				<div class="panel-heading" id="mypanelId"><div class="a" style="color:black;font-size:25px;">Hotel Details</div></div>
					<div class="panel-body">
						<table class="table table-striped">
            <tr><th>Hotel Name</th><td><?php echo $sname;?></td>
            <tr><th>Address</th><td><?php echo $haddress;?></td>
			<tr><th>Email</th><td><?php echo $em;?></td>
            
          </table>
						
					<div class="row">
						<div class="col-sm-5">&nbsp;</div>
						<div class="col-sm-4">
						<button class="btn-btn-default" type="submit" style="background-color:#ffad33;width:100px;"><?php echo "<a href='menudetails.php?hotelid=$hid'>MENU</a>"; ?></button>			
						</div>
						<div class="col-sm-4">&nbsp;</div>
					</div>
</div>
</div>
</div>
<p class="double"></p>
</div>
</div>
</form>






</body>
</html>