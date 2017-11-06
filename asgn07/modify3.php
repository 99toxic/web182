<?php

include( '../assets/layout.php' );

$title = "Web-182 | Modify 3";
$date = "October 17, 2017";
$file = "modify3.php";

displayHeader( $date, $file, $title );

include( "inc-employee-object.php" );

$id = $_POST[ "id" ];

$emp1 = new Employee();

$emp1->findEmployee( $id );

$result = $emp1->findEmployee( $id );

print( "<h1>Modify 3</h1>" );

if ( $result == 1 ) {
	print( "<p>Annual Pay for " . $emp1->getFirstName() . " " . $emp1->getLastName() . ": $" . $emp1->getAnnualPay() . "</p>" );
} else {
	print( "<p>The employee you requested is not found.</p>" );
}

displayFooter();
?>