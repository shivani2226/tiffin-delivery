<?php
require "dbconfig/config.php";
session_start();
if(empty($_SESSION['uname']))
{
	header("Location:login.php");
	exit();
}
    include "headproject.php";
	?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Google Map with Multiple Location</title>
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
    
</head>
<body>

<br>
<script src="http://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyCOAPRhRSIBDCWlrzXzN0nagcSbt3Xf0D4" type="text/javascript"></script>

<script type="text/javascript">
    function initialize() {
        var input = document.getElementById('searchTextField');
        var autocomplete = new google.maps.places.Autocomplete(input);
        google.maps.event.addListener(autocomplete, 'place_changed', function () {
            var place = autocomplete.getPlace();
            document.getElementById('city2').value = place.name;
           
			document.getElementById('lats').value = place.geometry.location.lat();
            document.getElementById('longs').value = place.geometry.location.lng();
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
<input type="hidden" id="city2" name="city2" />
  








<input type="hidden" id="lats" name="lati"/>
<input type="hidden" id="longs" name="longi"/>
<input type="submit" name="go"/><br>
</form>
<?php
if(isset($_GET["go"]))
{
$lat=$_GET["lati"];
$long=$_GET["longi"];	
?>


<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true&key=AIzaSyCPu71OL2RbOUTAdWyt0xCtyLP4nveOX6E"></script>
    <script type="text/javascript">
        var contentstring = [];
        var regionlocation = [];
        var markers = [];
        var iterator = 0;
        var areaiterator = 0;
        var map;
        var infowindow = [];
        geocoder = new google.maps.Geocoder();
        
        $(document).ready(function () {
            setTimeout(function() { initialize(); }, 400);
        });
        
        function initialize() {           
            infowindow = [];
            markers = [];
            GetValues();
            iterator = 0;
            areaiterator = 0;
            region = new google.maps.LatLng(regionlocation[areaiterator].split(',')[0], regionlocation[areaiterator].split(',')[1]);
			
            map = new google.maps.Map(document.getElementById("Map"), { 
                zoom: 12,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                center: {lat:<?php echo $lat;?>,lng:<?php echo $long;?>},
            });
            drop();
        }
        
        function GetValues() {
			
			contentstring[0] ="You";
			regionlocation[0]='<?php echo $lat;?>,<?php echo $long;?>';
			<?php
				$query=mysqli_query($con,"SELECT * FROM registerhotel WHERE 1=1 AND Latitude !=0 AND Longitude !=0");
	$i=1;
	while($row=mysqli_fetch_array($query))
   {
	   ?>
            //Get the Latitude and Longitude of a Point site : http://itouchmap.com/latlong.html
            contentstring[<?php echo $i;?>] =" <?php echo $row["HotelName"];?> ";
            regionlocation[<?php echo $i;?>] = '<?php echo $row["Latitude"];?>,<?php echo $row["Longitude"];?>';
			<?php
                        $i=$i+1;
   }
   ?>  
        }
               
        function drop() {
            for (var i = 0; i < contentstring.length; i++) {
				if(i==0)
				{
					setTimeout(function() {
                    addMarkeruser();
                }, 800);
				}
				else
				{
                setTimeout(function() {
                    addMarker();
                }, 800);
				}
				
            }
        }

        function addMarker() {
            var address = contentstring[areaiterator];
			
            var icons = 'http://maps.google.com/mapfiles/ms/icons/red-dot.png';
			
            var templat = regionlocation[areaiterator].split(',')[0];
            var templong = regionlocation[areaiterator].split(',')[1];
            var temp_latLng = new google.maps.LatLng(templat, templong);
            markers.push(new google.maps.Marker(
            {
                position: temp_latLng,
                map: map,
                icon: icons,
                draggable: false
            }));            
            iterator++;
            info(iterator);
            areaiterator++;
        }
		
		
		function addMarkeruser() {
            var address = contentstring[areaiterator];
			
            var icons = 'http://maps.google.com/mapfiles/ms/icons/blue-dot.png';
			
            var templat = regionlocation[areaiterator].split(',')[0];
            var templong = regionlocation[areaiterator].split(',')[1];
            var temp_latLng = new google.maps.LatLng(templat, templong);
            markers.push(new google.maps.Marker(
            {
                position: temp_latLng,
                map: map,
                icon: icons,
                draggable: false
            }));            
            iterator++;
            info(iterator);
            areaiterator++;
        }
		
		
		
		

        function info(i) {
            infowindow[i] = new google.maps.InfoWindow({
                content: contentstring[i - 1]
            });
            infowindow[i].content = contentstring[i - 1];
            google.maps.event.addListener(markers[i - 1], 'click', function() {
                for (var j = 1; j < contentstring.length + 1; j++) {
                    infowindow[j].close();
                }
                infowindow[i].open(map, markers[i - 1]);
            });
        }
    </script>





<div class="row">
<div class="col-sm-6">
    <div id="Map" style="width: 1200px; height: 600px;">
    </div>
	</div>
	<?php
	
}
?>

	
</body>
</html>
