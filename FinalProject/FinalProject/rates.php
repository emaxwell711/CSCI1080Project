<?php
$action = $_GET["submit"];
$contacts = $_POST["firstandlastname"];
$emails = $_POST["emailaddress"];

if($action = "submit") {
	$targetFolder = ".";
	file_put_contents($targetFolder."contacts.txt",$contacts);
	file_put_contents($stargetFolder."contacts.txt",$emails);
}
?>
<html>
<head>
	<title>Rates</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="bio.css">
</head>
	<body>
		<div id="main">
			<h1>Session Rates</h1>
			<a class="images" href="images/Elle/elle3.jpg" data-position="top center"><img src="images/Elle/elle3.jpg" alt="" /></a>
					<p> $75 - 1 hour session, 1 location / 1 look</p>
					<p>$200 - 2 hour session, 2 looks, 1 location</p>
					<p>$350 - 3-4 hour session, 3 looks, 2 locations</p>
			<a class="images" href="images/Elle/elle4.jpg" data-position="top center"><img src="images/Elle/elle4.jpg" alt="" /></a>
					<p><a class="linkleft" href="film.html">Film</a></p>
					<p><a class="linkcenter" href="portraits.html">Portraits</a></p>
					<p><a class="linkright" href="file:///home/emily/Downloads/WebDev/FinalProject/html5up-lens/index.html#">Home</a></p>
					<p>Have Elle Contact You</p>
			<form action="?action=save">
				First & Last Name:<br><br>
				<input type="text" name="firstandlastname"><br><br>
				Email Address:<br><br>
				<input type="text" name="emailaddress"><br><br>
				<input type="submit" name="submit">
			</form>
		</div>
	</body>
</html>