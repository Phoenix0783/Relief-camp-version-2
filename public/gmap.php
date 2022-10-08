<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gmap</title>
    <link rel="stylesheet" href="../src/css/tailwind.css">
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBakjCgQvZoAyCEB0PfKU1EkjcoKLITvZw&callback=initMap&libraries=&v=weekly"defer></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBakjCgQvZoAyCEB0PfKU1EkjcoKLITvZw&libraries=places&callback=initAutocomplete"defer></script>
    <link rel="stylesheet" href="../src/css/tailwind.css">
    <style>
        #map {
            width: 400px;
            height: 400px;
        }
    </style>
    <script>
        x = navigator.geolocation;
        x.getCurrentPosition(success, failure);
        function success (position) {
            var myLat = position.coords.latitude;
            var myLong = position.coords.longitude;
        
            var coords = new google.maps.LatLng(myLat, myLong);

            var mapOptions = {
                zoom: 9,
                center: coords,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }

            var map = new google.maps.Map(document.getElementById("map"), mapOptions);
            var marker = new google.maps.Marker({map: map, position:coords});
        }
        function failure() {}
    </script>
</head>
<body>
    <div id="map"></div>
    <h1>Helllasdaso</h1>

    <input id="autocomplete" class="mt-10" placeholder="Enter loc" type="text"/>
    <script>
        function initAutocomplete() {
            new google.maps.places.Autocomplete(
                    (document.getElementById('autocomplete')),
                    {types: ['geocode']}
            );
        }
        </script>
</body>
</html>