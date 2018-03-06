<?php
require "dbconfig/config.php";
session_start();
if(empty($_SESSION['uname']))
{
	header("Location:login.php");
	exit();
}

if(isset($_POST['pay']))
{
	$query_run=mysqli_query($con,"select * from cart where UserName='".$_SESSION["uname"]."'");
	
	
	
	while($rowa=mysqli_fetch_array($query_run))
{
	
	$itmid=$rowa["itemid"];
	
	$hotelid=$rowa["hotelid"];
	$itm_name=$rowa["ItemName"];
	$hotel_name=$rowa["HotelName"];
	
	$price=$rowa["Price"];
	$pic=$rowa["Picture"];
	
	$quantity=$rowa["Quantity"];
	$hotemail=$rowa["HotelEmail"];
	$email=$_SESSION["uname"];
	
	
	$query_run1=mysqli_query($con,"select * from orders where UserName='".$_SESSION["uname"]."' AND itemid='$itmid'");
	
	if(mysqli_num_rows($query_run1)>0)
	{
		echo '<script type="text/javascript">alert("Order Already Placed")</script>';
		header ("Location:cart.php");
	}
	
	
	//$quantity=1;
	//$email=$_SESSION['uname'];
	else
	{
$qu=mysqli_query($con,"insert into orders values('$itmid','$hotelid','$price','$quantity','$itm_name','$hotel_name','$email','$pic','$hotemail')");

header ("Location:payform.php?price=$price");
}

}
}
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
$resd=mysqli_query($con,"select * from cart where UserName='$username'");
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
				<div class="panel-heading" id="mypanelId"><div class="a" style="color:black;font-size:25px">Cart Details</div></div>
					<div class="panel-body">
				 <table class="table table-striped">
    <thead>
      <tr>
	  <th></th>
        <th>ItemName</th>
        <th>HotelName</th>
        <th>Quantity</th>
		<th>Price</th>
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

$quantity=$quantity+$proqty;
 ?></td>
 <td>Rs.<?php echo $row3["Price"];
$proprice=$row3["Price"];
$totprice=$quantity*$proprice;
$price=$price+$totprice;

?></td>
</a>
<td><button style="background-color:#ffad33;width:100px;"><a href="deletecart.php?delete_c=<?php echo $id;?>" > Delete </a></button></td>

      </tr>
    
			
			
<?php
}
?>
</tbody>
  </table>
  <div class="row">
  <div class="col-sm-10"></div>
  <div class="col-sm-2" style="width:150;font-size:25px; height:40;color:#00264d;border:none">
 <button  style="background-color:#ffad33;width:100px;" name="pay" value="Pay">Pay</button>
 
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

















