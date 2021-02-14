<?php 
	if(!isset($_SESSION)) 
		session_start(); 

  if(isset($_GET['businesssearch']))
    $searchterm = $_GET['businesssearch'];
?>
<!DOCTYPE html>
<html>
  <head>
  <title>pinstart - Find your next business.</title>
  <link rel="stylesheet" type="text/css" href="main.css">
  <script src="jquery-3.5.1.js"></script>
  <script type="text/javascript">
    let map;

    function initMap() {
      map = new google.maps.Map(document.getElementById("map"), {
        center: { 
          lat: 51.0447, 
          lng: -114.0719 },
        zoom: 12,
      });
    }
  </script> 
  <!-- Script provided by Chris Metcalf from https://dev.socrata.com/blog/2014/05/31/google-maps.html
  <script type="text/javascript">
    url = 'https://data.calgary.ca/resource/vdjc-pybd.json';

    // Retrieve our data and plot it
    $.getJSON(url, function(data, textstatus) {
          $.each(data, function(i, entry) {
            // Deal with our locations
          });
    });

  </script>
-->
  <link rel="stylesheet" type="text/css" href="./style.css" />
  <script src="./index.js"></script>
  </head>
  <body>
    <div class="wrapper">

      <div id="map"></div>
      <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBd3MjsurBTEZFEF7aZkPWGBPVXRZvU_QM&callback=initMap&libraries=&v=weekly"
        async
      ></script>

      <nav id="mainbar">
        <a href="index.php"><img src="pinstart-icon.png" ></a>
        <input type="search" name="businesssearch" <?php if(isset($searchterm))echo "value=\"$searchterm\""; ?>>
        <h2>in</h2>
        <input type="text" value="Calgary" readonly>
        <img src="right-arrow.png" alt="->">
      </nav>

      <div>
        <div id="recTabs">
          <p>< &#9679;&#x25CB;&#x25CB;&#x25CB;&#x25CB;&#x25CB; ></p>
        </div>
      <div id="recContainer">
        <h2>Recommended</h2>
        <hr>
        <h3>1108 Memorial Dr NW</h3>
        <hr>
        <h4>Here's why:</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse lectus metus, facilisis vitae tellus nec, ullamcorper auctor ipsum. Curabitur cursus laoreet euismod. Cras vehicula, neque eget consequat cursus, quam dui tempor turpis, at sollicitudin orci purus egestas nulla. Sed sed sagittis neque. Curabitur a ipsum congue, rutrum est eu, eleifend diam. Quisque maximus at tellus sit amet bibendum. Donec tincidunt sit amet leo in ultrices. Morbi eget diam tincidunt, ultricies nibh eu, varius nisi. Sed a porttitor ligula. Nulla ut lacus feugiat ipsum pharetra laoreet. Etiam sed tellus eu tortor facilisis interdum.</p>
      </div>
      
    </div>
  </body>
</html>