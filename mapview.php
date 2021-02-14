<?php 
	if(!isset($_SESSION)) 
		session_start(); 
?>
<!DOCTYPE html>
<html>
  <head>
  <title>pinstart - Find your next business.</title>
  <link rel="stylesheet" type="text/css" href="main.css">
  <script type="text/javascript">
    // Initialize and add the map
    function initMap(): void {
      // The location of Uluru
      const uluru = { lat: -25.344, lng: 131.036 };
      // The map, centered at Uluru
      const map = new google.maps.Map(
        document.getElementById("map") as HTMLElement,
        {
          zoom: 4,
          center: uluru,
        }
      );

      // The marker, positioned at Uluru
      const marker = new google.maps.Marker({
        position: uluru,
        map: map,
      });
    }
  </script>
  <script
        src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap&libraries=&v=weekly"
        defer
      ></script>
      <link rel="stylesheet" type="text/css" href="./style.css" />
      <script src="./index.js"></script>
  </head>
  <body class="mapviewph">
    <div>
      <nav id="mainbar">
        <img src="pinstart-icon.png" >
        <input type="search" name="businesssearch">
        <h2>in</h2>
        <input type="text" value="Calgary" readonly>
        <img src="right-arrow.png" alt="->">
      </nav>
    </div>

    <div id="recContainer">
      <h2>Recommended</h2>
      <hr>
      <h3>1108 Memorial Dr NW</h3>
      <hr>
      <h4>Here's why:</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse lectus metus, facilisis vitae tellus nec, ullamcorper auctor ipsum. Curabitur cursus laoreet euismod. Cras vehicula, neque eget consequat cursus, quam dui tempor turpis, at sollicitudin orci purus egestas nulla. Sed sed sagittis neque. Curabitur a ipsum congue, rutrum est eu, eleifend diam. Quisque maximus at tellus sit amet bibendum. Donec tincidunt sit amet leo in ultrices. Morbi eget diam tincidunt, ultricies nibh eu, varius nisi. Sed a porttitor ligula. Nulla ut lacus feugiat ipsum pharetra laoreet. Etiam sed tellus eu tortor facilisis interdum.</p>
    </div>

    <div id="map"></div>
  </body>
</html>