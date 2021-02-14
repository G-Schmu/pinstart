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
<body>
	<div class="aligncenter" id="indexmenu">
		<img src="pinstart-2.png" width="400em" id="indexmainlogo">
		<div id="searchbar">
			<form name="search" action="mapview.php">
			<h1>Where's the best location for a new</h1>
				<div class="hor"><input type="search" id="indexsearch" name="businesssearch" placeholder="Business Name/Idea">
        		<button id="right-arrow"></div>
				<div class="hor"><h2>in</h2><input type="text" value="Calgary" readonly></div>
			</form>
		</div>
	</div>	
</body>
</html>