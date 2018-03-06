<?php 
$dbh=mysqli_connect("localhost","root","","internship");
$hid=$_GET["hotelid"];
function itemdisplay()
{
	global $dbh,$hid;
	$query=mysqli_query($dbh,"select * from item where hotelid=$hid");
	?>
	
				<?php
	while($row=mysqli_fetch_array($query))
{
	$iid=$row["itemid"];
	?>
	
				<?php echo"<a href='itemdetail.php?itemid=$iid'>"?><?php echo $row["ItemName"]; ?></a>
				<br>
				
<?php
}
}
?>