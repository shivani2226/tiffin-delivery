<?php
require "dbconfig/config.php";
session_start();
/*if(empty($_SESSION['uname']))
{
	header("Location:login.php");
	exit();
}*/
$hid=$_GET["hid"];
include "headproject.php";
?>
<br><br>
<head>
<style>
.a {
	 text-align: center;
      
  }
</style>
</head>
<body background="img7.jpg">
<?php
$price=0;
$quantity=1;
$username=$_SESSION['uname'];
$resd=mysqli_query($con,"select * from orders where hotelid=$hid");
if(!$resd)
{
	printf("error: %s\n",mysqli_error($con));
}


?>




<form method="post"><br><br>
<div class="row">
<div class="col-sm-2">&nbsp;</div>
<div class="col-sm-8">
<div class="panel-body">
				<div class="panel panel-default" >
				<div class="panel-heading" id="mypanelId"><div class="a" style="color:black;font-size:25px">Order Details</div></div>
					<div class="panel-body">
				 <table class="table table-striped">
    <thead>
      <tr>
	  <th></th>
        <th>ItemName</th>
        <th>HotelName</th>
        <th>Quantity</th>
		<th>Price</th>
		<th></th>
		<th>Total</th>
		
      </tr>
    </thead>
	<tbody>
	
	<?php
	while($row3=mysqli_fetch_array($resd))
{
$id=$row3["itemid"];	
?>

		

    <a href="item_description.php?itemid=<?php echo $row["itemid"]; ?>">
      <tr>
	  
	  <td><img src="../Seller/<?php echo $row3["Picture"]; ?>" width="50" height="50" /></td>
        <td> <?php echo $row3["ItemName"]; ?></td>
        <td><?php echo $row3["HotelName"]; ?></td>
        <td><?php echo $row3["Quantity"];
$proqty=$row3["Quantity"];


 ?></td>
 <td>Rs.<?php echo $row3["Price"];
$proprice=$row3["Price"];
$price=$proprice*$proqty;
?></td>
</a>
<td><button style="background-color:#ffad33;width:100px;"><a href="deletecart.php?delete_c=<?php echo $id;?>" > Delete </a></button></td>
<td>Price : <?php echo $price;?></td>
      </tr>
    
			
			
<?php
}
?>

</tbody>
  </table>
  
  
  
