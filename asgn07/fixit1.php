<?php
include( '../assets/layout.php' );

$title = "Web-182 | WAGE REPORT";
$date = "October 12, 2017";
$file = "fixit1.php";

displayHeader( $date, $file, $title );

include( "inc-employee-object.php" ); // I added the include file 

$emp1 = new Employee();

$emp1->setID( "123456" );

print( "<h1>Wage Report</h1>" );
print( "<p>The employee's ID is " . $emp1->getID() . "</p>" );

displayFooter();

?>