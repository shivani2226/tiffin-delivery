<?php

require "dbconfig/config.php";
session_start();
if(empty($_SESSION['uname']))
{
	header("Location:login.php");
	exit();
}
include "carousel.php";
 include "headproject.php";
global $quantity;
$iid=$_GET["itemid"];
//$hid=$_GET["hotelid"];

if (isset($_POST['submit1'])) 
{
$query_run=mysqli_query($con,"select * from cart where UserName='".$_SESSION["uname"]."' AND itemid='$iid'");
	
	if(mysqli_num_rows($query_run)>0)
	{
		echo '<script type="text/javascript">alert("Item Already Entered to Cart")</script>';
	}
	else
	{
	$result=mysqli_query($con,"select * from item where itemid=$iid");
	

	while($rowa=mysqli_fetch_array($result))
{
	
	$itmid=$rowa["itemid"];
	$hotelid=$rowa["hotelid"];
	$itm_name=$rowa["ItemName"];
	$hotel_name=$rowa["HotelName"];
	
	$price=$rowa["Price"];
	$pic=$rowa["Picture"];
	$des=$rowa["Description"];
	$quantity=$_POST['qty'];
	$hotemail=$rowa["HotelEmail"];
	$email=$_SESSION["uname"];
	//$quantity=1;
	$email=$_SESSION['uname'];
	
$qu=mysqli_query($con,"insert into cart values('$itmid','$hotelid','$price','$quantity','$itm_name','$hotel_name','$email','$pic','$hotemail')");
	echo '<script type="text/javascript"> alert("Product Added")</script>';

}

}
}
?>

<html>
<head>
<link rel="stylesheet" href="styles.css"/>
<link href="bootstrap.min.css" rel="stylesheet" />
<script src="bootstrap.min.js" type="text/javascript"></script>
<script src="jquery.min.js" type="text/javascript"></script>
<script type="text/javascript"></script>
<style>
  body {
      margin:0
  }
 .a {
	 text-align: center;
      
  }
img {
  margin-right: 5px;
  vertical-align: middle;
}
button {
  padding: 5px;
 
}
   p.double {border-style: double;} 
   #sub{
	   width: 6em;  height: 2em;
   }
  </style>
</head>
<body>
<?php 

$result1=mysqli_query($con,"select * from item where itemid=$iid");
while($rowa=mysqli_fetch_array($result1))
{
	$itmid=$rowa["itemid"];
	$hotid=$rowa["hotelid"];
	$itm_name=$rowa["ItemName"];
	$hotel_name=$rowa["HotelName"];
	$price=$rowa["Price"];
	$pic=$rowa["Picture"];
	$des=$rowa["Description"];
	
	//$quantity=1;
?>
<form method="post"><br><br>
<div class="row">
<div class="col-sm-3">&nbsp;</div>
<div class="col-sm-6">
<p class="double"></p>
<div class="panel-body">
				<div class="panel panel-default" >
				<div class="panel-heading" id="mypanelId"><div class="a" style="color:black;font-size:25px">Item Description</div></div>
					<div class="panel-body">
				  <div class="row">
					
					<div class="col-sm-4">
					<div class="panel panel-default" >
					<img src="../Seller/<?php echo $pic; ?>" width="150" height="200" ></div>
					</div>

					<div class="col-sm-8">
					<table class="table table-striped">	
            <tr><th>Item Name</th><td><?php echo $itm_name;?></td>
            <tr><th>Price</th><td><?php echo $price;?></td>
			<tr><th>Description</th><td><?php echo $des;?></td>
			<tr><th>Quantity</th><td>
			<input type="text" name="qty"  id="qty" list="productName">
<datalist id="productName">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
</datalist>
			</input>
			</td>
          </table>
		  
						
						
						<div class="row">
						<div class="col-sm-8">&nbsp;</div>
						<div class="col-sm-4">	
						<!--<button class="btn-btn-default" type="submit" name="submit1" ><?php echo "<a href='cart.php?hotelid=$hid'>CART</a>"; ?></button>		-->
<input id="sub" type="submit" name="submit1" value="CART"  style="background-color:#ffad33;width:100px;" />
						</div>
						</div>
					</div>
				  </div>
					</div>
					</div>
					</div>
					<p class="double"></p>
					</div>
					</div>
					</div>
</form>
<?php 
}
?>
</body>
</html>