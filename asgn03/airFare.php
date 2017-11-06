<!DOCTYPE html>
<!--Author:
	Date:
	File:	airFare.php
	Purpose:Chapter 13 Exercise


-->


<html>
<head>
	<title>AIR FARE</title>
	<link rel ="stylesheet" type="text/css" href="../css/style.css" />
</head>
<body>

	<h1>AIR FARE CALCULATOR</h1>

	<?php
	
		include("incTravel.php");

		$destination = $_POST['destination'];
	
		$airFare = getAirfare($destination);
		$airline = getAirline($destination);

		print("<p>Destination: $destination<br />");
		print("The air fare is $".number_format($airFare, 2)." on $airline.</p>");


	?>

</body>
</html>
