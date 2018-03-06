<html>
<head>
<script src="http://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyCOAPRhRSIBDCWlrzXzN0nagcSbt3Xf0D4" type="text/javascript"></script>

<script type="text/javascript">
    function initialize() {
        var input = document.getElementById('searchTextField');
        var autocomplete = new google.maps.places.Autocomplete(input);
        google.maps.event.addListener(autocomplete, 'place_changed', function () {
            var place = autocomplete.getPlace();
            document.getElementById('city2').value = place.name;
           
			document.getElementById('hotlad').value = place.geometry.location.lat();
            document.getElementById('hotlong').value = place.geometry.location.lng();
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
<input id="searchTextField" type="text" size="50" placeholder="Enter a location" autocomplete="on" runat="server" />  
<input type="hidden" id="city2" name="city2" />
  
</form>
</body>
</html>