<?php
include( '../assets/layout.php' );

$title = "Web-182 | WAGE REPORT";
$date = "October 12, 2017";
$file = "fixit2.php";

displayHeader( $date, $file, $title );

include( "inc-employee-object.php" );

$emp1 = new Employee(); //I added new

$emp1->setID( "123456" );

print( "<h1>Wage Report</h1>" );
print( "<p>The employee's ID is " . $emp1->getID() . "</p>" );

displayFooter();

?>