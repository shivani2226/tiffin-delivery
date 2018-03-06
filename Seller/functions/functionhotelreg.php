<?php 
$dbh=mysqli_connect("localhost","root","","internship");
$id=$_GET["userid"];
function hotelreg()
{
	global $dbh,$id;
	$query=mysqli_query($dbh,"select * from registerhotel where userid=$id");
	?>
	
				
				<?php
				$i=1;
	while($row=mysqli_fetch_array($query))
{
	$hid=$row["hotelid"];
	?>
				
				<?php echo"<a href='hoteldetail.php?hotelid=$hid&userid=$id'>"?><?php echo $i; echo " . "; echo $row["HotelName"]; ?></a>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
				
				<?php echo"<a href='orders.php?hid=$hid&userid=$id'>"?>View Your Orders</a>
				<?php $i=$i+1;?>
				<br>
				
<?php
}

}
?>