<?php 
$dbh=mysqli_connect("localhost","root","","internship");
//$hid=$_GET["hotelid"];
function hotelname()
{
	global $dbh,$id;
	$query=mysqli_query($dbh,"select * from registerhotel");
	?>
	<html>
	<head>
	</head>
	<body>
	<form>
	<?php
	while($row=mysqli_fetch_array($query))
{
	$hid=$row["hotelid"];
	?>
		

    
     
      
      
	    <option><?php echo $row["HotelName"]; ?></option>

    
    
			
			
<?php
}
?>

    
</form>
</body>
</html>

<?php
}
?>