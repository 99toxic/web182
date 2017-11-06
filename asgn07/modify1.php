<?php

include( '../assets/layout.php' );

$title = "Web-182 | Modify 1";
$date = "October 17, 2017";
$file = "modify1.php";

displayHeader( $date, $file, $title );

include( "inc-employee-object.php" );

$id1 = $_POST[ "id1" ];
$id2 = $_POST[ "id2" ];
$id3 = $_POST[ "id3" ];

$emp1 = new Employee();
$emp2 = new Employee();
$emp3 = new Employee();

$emp1->findEmployee( $id1 );
$emp2->findEmployee( $id2 );
$emp3->findEmployee( $id3 );

print( "<h1>Modify 1</h1>" );
print( "<p>Weekly Pay for " . $emp1->getFirstName() . " " . $emp1->getLastName() . ": $" . $emp1->getWeeklyPay() . "</p>" );
print( "<p>Weekly Pay for " . $emp2->getFirstName() . " " . $emp2->getLastName() . ": $" . $emp2->getWeeklyPay() . "</p>" );
print( "<p>Weekly Pay for " . $emp3->getFirstName() . " " . $emp3->getLastName() . ": $" . $emp3->getWeeklyPay() . "</p>" );

displayFooter();

?>