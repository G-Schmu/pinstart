<?php 
	if(!isset($_SESSION)) 
		session_start(); 
?>
<!DOCTYPE html>
<html>
  <head>
  <title>pinstart - Find your next business.</title>
  <link rel="stylesheet" type="text/css" href="main.css">
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
  </body>
</html>