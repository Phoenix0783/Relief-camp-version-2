<!DOCTYPE html>
<html>
<head> 
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Google Maps JavaScript API with Places Library Autocomplete Address Field</title> 
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />   -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> -->
<script src="js/jquery-3.6.0.min.js"></script>

<!-- Google Maps JavaScript library -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBakjCgQvZoAyCEB0PfKU1EkjcoKLITvZw&callback=initMap&libraries=&v=weekly"></script>
 

<script type="text/javascript">

google.maps.event.addDomListener(window, 'load', intilize);

function intilize() {

var autocomplete = new google.maps.places. Autocomplete (document.getElementById('txtautocomplete'));


google.maps.event.addListener(autocomplete, 'place_changed', function () {


var place = autocomplete.getPlace();

var location = "<b>Address</b>: " + place. formatted_address + "<br/>";

location += "<b>Latitude</b>: " + place.geometry.location. A+ "<br/>"; location + "<b>Longitude</b>: " + place.geometry.location. F;

document.getElementById('lblResult').innerHTML = location

});

};

</script>

<span>Location:</span><input type="text" id="txtautocomplete" style="width:200px" placeholder="Enter the addr"/>

<label id="lblResult"></label>


</body>

</html>