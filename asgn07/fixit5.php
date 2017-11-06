<?php
include( '../assets/layout.php' );

$title = "Web-182 | WAGE REPORT";
$date = "October 12, 2017";
$file = "fixit5.php";

displayHeader( $date, $file, $title );

include( "inc-employee-object.php" );

$emp1 = new Employee();

$emp1->setID( "123456" );
$emp1->setFirstName( "Alan" );
$emp1->setLastName( "Turing" ); // I changed get to set
$emp1->setHourlyWage( 15.25 );

print( "<h1>Wage Report</h1>" );
print( "<table>
			<tr><td>ID</td><td>" . $emp1->getID() . "</td></tr>
			<tr><td>First Name</td><td>" . $emp1->getFirstName() . "</td></tr>
			<tr><td>Last Name</td><td>" . $emp1->getLastName() . "</td></tr>
			<tr><td>Weekly Pay</td><td>" . $emp1->getWeeklyPay( 40 ) . "</td></tr>
			</table>" );

displayFooter();

?>