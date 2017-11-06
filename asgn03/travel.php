<!DOCTYPE html>
<!--Author:
	Date:
	File:	travel.php
	Purpose:Chapter 13 Exercise


-->


<html>
<head>
	<title>Travel</title>
	<link rel ="stylesheet" type="text/css" href="../css/style.css" />
</head>
<body>

	<h1>Travel</h1>

	<?php

		include("incTravel.php");	
	
		$destination = $_POST['destination'];
		$numTravelers = $_POST['numTravelers'];
		$numNights = $_POST['numNights'];

		$airFare = getAirfare($destination);
		$hotelRate = getHotelRate($destination);

		$ticketCost = getTicketCost($numTravelers, $airFare);
		$hotelCost = getHotelCost ($numTravelers, $numNights, $hotelRate);


		$totalCost = $ticketCost + $hotelCost;

		print("<p>Destination: $destination<br />");
		print("Number of people: $numTravelers<br />");
		print("Number of nights: $numNights<br />");
		print("Airline Tickets: $".number_format($ticketCost, 2)."<br />");
		print("Hotel Charges: $".number_format($hotelCost, 2)."</p>");
		print("<p><strong>TOTAL COST: $".number_format($totalCost, 2)."</strong></p>");

	?>

</body>
</html>
