<?php
require "dbconfig/config.php";
session_start();
if(empty($_SESSION['uname']))
{
	header("Location:login.php");
	exit();
}
$hid=$_GET["hotelid"];
$uid=$_GET["userid"];
$query=mysqli_query($con,"select * from registerhotel where hotelid=$hid");
	$row1=mysqli_fetch_array($query);
	$hname=$row1["HotelName"];
	$sname=$row1["Sellername"];
	$haddress=$row1["HotelAddress"];
	$cont=$row1["Contact"];
	$em=$row1["HotelEmail"];
	
	if(isset($_POST['update']))
	{
		$hname=$_POST['hotelname'];
		$sname=$_POST['sellername'];
		$haddress=$_POST['address'];
		$cont=$_POST['hotelcontact'];
		$em=$_POST['hotelemail'];
		
		
		$query1="UPDATE registerhotel SET Sellername='$sname',HotelName='$hname',HotelAddress='$haddress',Contact='$cont',HotelEmail='$em' WHERE hotelid=$hid";
 $query_run=mysqli_query($con,$query1);
 if($query_run)
		   {
			   echo '<script type="text/javascript"> alert("Details Updated")</script>';
			  
		   }
	}
?>
<html>
<head>
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
<div class="col-sm-1">&nbsp;</div>
<div class="col-sm-6"><br>
						<div class="panel panel-default">
						<div class="panel-heading" style="color:black;font-size:25px;">Hotel Details</div>
						<div class="panel-body">
				<div class="panel panel-default"  style="background-color:'#cccccc'">
				<div class="panel-body">
						<div class="form-group" style="color:black">
						<label>Owner Name</label>
					
						<input class="form-control" value="<?php echo $sname;?>" type="text" name="sellername" id="sellername"></input>
						</div>
						<div class="form-group" style="color:black">
							<label>Hotel Name</label>
							<input class="form-control" value="<?php echo $hname;?>" type="text" name="hotelname" id="hotname" />
						</div>
						<div class="form-group" style="color:black">
							<label>Address</label>
							<input class="form-control" value="<?php echo $haddress;?>" type="text" name="address" id="hotadd"/>
						</div>
						<div class="form-group" style="color:black">
							<label>Contact</label>
							<input class="form-control" value="<?php echo $cont;?>" type="text" name="hotelcontact" id="hotcon" />
						</div>
						<div class="form-group" style="color:black">
							<label>Email</label>
							<input class="form-control" value="<?php echo $em;?>" type="email" name="hotelemail" id="hotemail"/>
						</div>
						
						<div class="row">
						<div class="col-sm-2">&nbsp;</div>
						<div class="col-sm-7">
						<div class="form-group">
							<input style="width:120px;background-color:#696969;color:white"  type="submit" value="UPDATE" name="update" onclick="return fun1()"/>
						</div>
						</div>
						<div class="col-sm-3" style="color:red">
						<?php echo "<a href='additem.php?hotelid=$hid&userid=$uid'>Add Item</a>"; ?>
						</div>
					</div>
</div>

</form>
</body>
</html>