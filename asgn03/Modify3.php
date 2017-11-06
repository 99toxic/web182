<!DOCTYPE html>
<!--Author:
	Date:
	File:	Modify3.php
	Purpose:Chapter 13 Exercise

	Modify3.html asks the user to submit their hours worked and pay rate.
	Modify3.php uses functions from the incWageFunctions.php file to
	calculate the wage and bonus. The program also calls a function
	named getOvertimeHours() in order to display the number of overtime
	hours worked. However this function does not exist!

	Modify incWageFunctions.php by adding this function. The function
	should be designed to receive the hours worked and return the
	number of overtime hours. If the hours worked is 40 or less,
	the function should return 0, otherwise the function should return
	the the result of subtracting 40 from the hours worked.

-->
<html>
<head>
	<title>Modify3</title>
	<link rel ="stylesheet" type="text/css" href="../css/style.css" />
</head>
<body>

	<h1>Modify3</h1>

	<?php
		include ("incWageFunctions.php");

		$hoursWorked = $_POST['hoursWorked'];
		$hourlyWage = $_POST['hourlyWage'];

		$wage = getWage($hourlyWage, $hoursWorked);
		$bonus = getBonus($wage);
		$overtimeHours = getOvertimeHours($hoursWorked);

		print("<p>Your hourly wage is $$hourlyWage and you worked
		$hoursWorked hours.</p>");
		print("<p>Your wages are $$wage.</p>");
		print("<p>Your bonus is $$bonus.</p>");
		print("<p>You worked $overtimeHours hours of overtime.</p>");

	?>

</body>
</html>
