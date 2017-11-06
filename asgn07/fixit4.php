<?php
include( '../assets/layout.php' );
$title = "Web-182 | WAGE REPORT";
$date = "October 12, 2017";
$file = "fixit4.php";

displayHeader( $date, $file, $title );

include( "inc-employee-object.php" );

$emp1 = new Employee();
$emp1->setHourlyWage( 15.25 ); //I moved this from bottom.

$emp1->setID( "123456" );

print( "<h1>Wage Report</h1>" );
print( "<p>The weekly pay for employee #" . $emp1->getID() . " is $" . $emp1->getWeeklyPay( 40 ) . "</p>" );

displayFooter();

?>