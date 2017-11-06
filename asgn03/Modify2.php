<!DOCTYPE html>
<!--Author:
	Date:
	File:	Modify2.php
	Purpose:Chapter 13 Exercise

	Modify2.html provides a Submit button to display a table of
	pay increases. The current version of Modify2.php uses a for loop
	to display pay increases of people earning between $8.00 and $25.00
	an hour. It calculates the pay increases directly without using
	functions.

	Change Modify2.php so that it uses the getNewHourlyWage() function
	that is provided in the incWageFunctions.php file instead of
	performing this calculation directly.
	Be sure to add the required include statement!
	

-->
<html>
<head>
	<title>Modify2</title>
	<link rel ="stylesheet" type="text/css" href="../css/style.css" />
</head>
<body>

	<h1>Modify2</h1>

	<?php
	
		include("incWageFunctions.php");

		$payIncrease = 0.10;
		print ("<table border = \"1\">");
		print ("<tr><td><strong>Current Pay Rate</strong></td>
					<td><strong>New Pay Rate</strong></td></tr>");

		for ($hourlyWage = 8.00; $hourlyWage < 25.00; $hourlyWage = $hourlyWage + 1)
		{
			$newHourlyWage = getNewHourlyWage ($hourlyWage, $payIncrease);
			print("<tr><td>$$hourlyWage</td><td>$$newHourlyWage</td></tr>");
		}
		print ("</table");
	?>

</body>
</html>
