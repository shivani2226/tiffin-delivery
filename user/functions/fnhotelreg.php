<?php 
$dbh=mysqli_connect("localhost","root","","internship");
//$hid=$_GET["hotelid"];
function hotelreg()
{
	global $dbh,$id;
	
	
	?>
	
	<br>
	<script type="text/javascript" src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
<script src="http://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyCOAPRhRSIBDCWlrzXzN0nagcSbt3Xf0D4" type="text/javascript"></script>

<script type="text/javascript">
    function initialize() {
        var input = document.getElementById('searchTextField');
        var autocomplete = new google.maps.places.Autocomplete(input);
        google.maps.event.addListener(autocomplete, 'place_changed', function () {
            var place = autocomplete.getPlace();
            document.getElementById('city1').value = place.name;
           
			document.getElementById('lat1').value = place.geometry.location.lat();
            document.getElementById('long1').value = place.geometry.location.lng();
			alert(document.getElementById('cityLat').innerHTML);
            alert("This function is working!");
            alert(place.name);
           alert(place.address_components[0].long_name);
			alert(place.geometry.location.lat());
				alert(place.geometry.location.lng());
        });
    }
    google.maps.event.addDomListener(window, 'load', initialize); 
</script>
</head>
<body>

<form>
<input id="searchTextField" type="text" size="50" placeholder="Enter your location" autocomplete="on" runat="server" />  
<input type="hidden" id="city1" name="city1" />
  

<input type="hidden" id="lat1" name="lati1"/>
<input type="hidden" id="long1" name="longi1"/>
<input type="submit" name="go"/><br>
</form>
<?php
if(isset($_GET["go"]))
{
$lat=$_GET["lati1"];
$long=$_GET["longi1"];	
	
	$query=mysqli_query($dbh,"SELECT hotelid, ( 3959 * acos( cos( radians(".$_GET["lati1"].") ) * cos( radians( Latitude ) ) * cos( radians( Longitude ) - radians(".$_GET["longi1"].") ) + sin( radians(".$_GET["lati1"].") ) * sin( radians( Latitude ) ) ) ) AS distance FROM registerhotel HAVING distance < 25 ORDER BY distance LIMIT 0 , 20;");
	?>
	<table class="table table-striped">
    <thead>
      <tr>
        <th>Hotels</th>
        <th>Hotel Address</th>
        <th>MENU</th>
      </tr>
    </thead>
	<tbody>
	
	<?php
	while($row=mysqli_fetch_array($query))
{
	$hid=$row["hotelid"];
	
		$query1=mysqli_query($dbh,"SELECT * from registerhotel where hotelid=$hid");
			$row1=mysqli_fetch_array($query1)
    ?>
      <tr>
        <td> <?php echo $row1["HotelName"]; ?></td>
        <td> <?php echo $row1["HotelAddress"]; ?></td>
        <td><?php echo"<a href='menudetails.php?hotelid=$hid'>"?>View</a></td>
      </tr>
    
			
			
<?php
}
}
?>
</tbody>
  </table>
  
</div>
</div>

<?php
}
?>
