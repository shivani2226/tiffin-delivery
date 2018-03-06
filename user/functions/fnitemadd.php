<?php 
$dbh=mysqli_connect("localhost","root","","internship");
$hid=$_GET["hotelid"];

function hotelreg()
{
	global $dbh,$hid,$iid;
	$query=mysqli_query($dbh,"select * from item");
	while($row=mysqli_fetch_array($query))
{
	$iid=$row["itemid"];
	
		

			  echo"<a href='item_description.php?itemid=$iid&hotelid=$hid'>"?><?php echo $row["ItemName"]; ?><br></a>
			
<?php
}
?>
</div>
</div>
<?php
}
?>