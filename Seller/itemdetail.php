<?php
require "dbconfig/config.php";
session_start();
if(empty($_SESSION['uname']))
{
	header("Location:login.php");
	exit();
}
$iid=$_GET["itemid"];
$query=mysqli_query($con,"select * from item where itemid=$iid");
	$row1=mysqli_fetch_array($query);
	$iname=$row1["ItemName"];
	$price=$row1["Price"];
	$des=$row1["Description"];
	if(isset($_POST['update']))
	{
		$iname=$_POST['itemname'];
		$price=$_POST['price'];
		$des=$_POST['description'];
	
		$query1="UPDATE item SET Itemname='$iname',Price='$price',Description='$des' WHERE itemid=$iid";
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
<br>
<div class="row">
<div class="col-sm-1">&nbsp;</div>
<div class="col-sm-6">

				<div class="panel panel-default">
				<div class="panel-heading" style="color:black;font-size:25px;">Item Details</div>
				<div class="panel-body">
				<div class="panel panel-default"  style="background-color:'#cccccc'">
				<div class="panel-body">
						<div class="form-group" style="color:black">
						<label>Item Name</label>
					
						<input class="form-control" value="<?php echo $iname;?>" type="text" name="itemname" id="iname"></input>
						</div>
						<div class="form-group" style="color:black">
							<label>Price</label>
							<input class="form-control" value="<?php echo $price;?>" type="text" name="price" id="iprice" />
						</div>
						<div class="form-group" style="color:black">
							<label>Description</label>
							<input class="form-control" value="<?php echo $des;?>" type="text" name="description" id="ides"/>
						</div>
						
						
						<div class="row">
						<div class="col-sm-2">&nbsp;</div>
						<div class="col-sm-7">
						<div class="form-group">
							<input style="width:120px;background-color:#696969;" class="btn btn-default" type="submit" value="UPDATE" name="update" onclick="return fun1()"/>
						</div>
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