<!DOCTYPE html>
<!--Author:
	Date:
	File:	softwareOrder.php
	Purpose:Chapter 13 Exercise

-->

<html>
<head>
	<title>SaveTheWorld Software</title>
	<link rel ="stylesheet" type="text/css" href="../css/style.css" />
</head>
<body>

	<h1>SaveTheWorld Software: Order Form</h1>

	<?php
		include ("incSoftwareOrder.php");

		$os = $_POST['os'];
		$numCopies = $_POST['numCopies'];

		if ($numCopies < 1)
			print("ERROR: You must order at least 1 copy!");
		else
		{
			$subTotal = getSubTotal($numCopies);
			$salesTax = getSalesTax($subTotal);
			$shippingAndHandling = getShippingHandling($numCopies);

			$totalCost = $subTotal + $salesTax + $shippingAndHandling;

			print("<hr /><p><strong>YOUR ORDER:</strong> </p><hr />");
			print("<p>Operating System: $os<br />");
			print("Number of copies: $numCopies<br />");
			print("Sub-total: $$subTotal<br />");
			print("Sales tax: $$salesTax<br />");
			print("Shipping and handling: $$shippingAndHandling</p>");
			print("<hr /><p><strong>TOTAL: $$totalCost</strong></p><hr />");
		}
	?>

</body>
</html>
