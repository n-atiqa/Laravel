@extends('layouts.master')

@section('content')

<h2>List of Restaurants</h2>

<h3><a href="http://royalpalmsg.com/">Royal Palm</a></h3>
<p>6 Eu Tong Sen St, 04-86/87/89/89b/89c, Singapore 059817</p>
<p>6333 5123<p>

<h3><a href="https://www.paradisegp.com/">Seafood Paradise</a></h3>
<p>No. 10 Bayfront Avenue #02-03 Marina Bay Sands (Level 2 Dining) Singapore, Singapore 018956</p>
<p>6688 7051</p>

<h3><a href="http://www.bangkokjam.com.sg/">Bangkok Jam</a></h3>
<p>02-105B/C, 6 Raffles Blvd, Singapore 039594</p>
<p>6338 6632</p>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA1AhZqy6CRiLbUgdTu-M_biZUPwR4vLLw" type="text/javascript"></script>

  <div id="map"></div>

  <script type="text/javascript">
    var locations = [
      ['Royal Palm', 1.289570, 103.846087, 1],
      ['Seafood Paradise', 1.282637, 103.858289, 2],
      ['Bangkok Jam', 1.292617, 103.856580, 3]
    ];

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 12,
      center: new google.maps.LatLng(1.301751, 103.853263),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }
  </script>




@stop
