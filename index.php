<?php 
	if(!isset($_SESSION)) 
		session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>pinstart - Find your next business.</title>
</head>
<body>
	<div>
		
	</div>
	<div>
		<form name="search">
		<h1>Where's the best location for a new</h1>
			<input type="search" name="businesssearch" placeholder="Business Name/Idea">
			<h2>in</h2><input type="text" name="city" value="Calgary" readonly>
		</form>
	</div>
</body>
</html>