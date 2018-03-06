<!DOCTYPE html>

<html>
<head>
<script src="http://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyCOAPRhRSIBDCWlrzXzN0nagcSbt3Xf0D4" type="text/javascript"></script>
</head>

<body>
<p id="demo">Click the button to get your coordinates:</p>
<button onclick="getLocation()">Try It</button>
<script>
var x=document.getElementById("demo");

function getLocation()
  {
  if (navigator.geolocation)
    {
    navigator.geolocation.getCurrentPosition(showPosition);
	
    }
  else{x.innerHTML="Geolocation is not supported by this browser.";}
  }
function showPosition(position)
  {
	  alert(position.coords.latitude);
	  alert(position.coords.longitude);
	document.getElementById('hotlad').value = position.coords.latitude;
            document.getElementById('hotlong').value = position.coords.longitude;
  x.innerHTML="Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude;  
  
  }
</script>
</body>
</html>
