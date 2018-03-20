@extends('layouts.master')

@section('content')


<h1>Navigate</h1>

<div id="floating-panel">
<strong>Start:</strong>
<select id="start">
 <option value="9 Bishan Pl, Singapore 579837">Junction 8</option>
</select>
<br>
<strong>End:</strong>
<select id="end">
 <option value="">Select</option>
 <option value="royal palm, singapore, sg">Royal Palm</option>
 <option value="seafood paradise, singapore, sg">Seafood Paradise</option>
 <option value="bangkok jam, singapore, sg">Bangkok Jam</option>
</select>
</div>

<div id="right-panel"></div>
<div id="map1"></div>



<script>
 function initMap() {
   var directionsDisplay = new google.maps.DirectionsRenderer;
   var directionsService = new google.maps.DirectionsService;
   var map = new google.maps.Map(document.getElementById('map1'), {
     zoom: 11,
     center: {lat: 1.301751,  lng: 103.853263}
   });
   directionsDisplay.setMap(map);
   directionsDisplay.setPanel(document.getElementById('right-panel'));

   var control = document.getElementById('floating-panel');
   control.style.display = 'block';
   map.controls[google.maps.ControlPosition.TOP_CENTER].push(control);

   var onChangeHandler = function() {
     calculateAndDisplayRoute(directionsService, directionsDisplay);
   };
   document.getElementById('start').addEventListener('change', onChangeHandler);
   document.getElementById('end').addEventListener('change', onChangeHandler);
 }

 function calculateAndDisplayRoute(directionsService, directionsDisplay) {
   var start = document.getElementById('start').value;
   var end = document.getElementById('end').value;
   directionsService.route({
     origin: start,
     destination: end,
     travelMode: 'DRIVING'
   }, function(response, status) {
     if (status === 'OK') {
       directionsDisplay.setDirections(response);
     } else {
       window.alert('Directions request failed due to ' + status);
     }
   });
 }
</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBWtqO7J_i4g1ZPcdWPh2fysxA-pnb7VKU&callback=initMap">
</script>
@stop
