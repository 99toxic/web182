<?php

include( '../assets/layout.php' );

$title = "Web-182 | Test Cube";
$date = "October 25, 2017";
$file = "test-cube.php";

displayHeader( $date, $file, $title );

include( "inc-rectangle-object.php" );
include( "inc-cube-object.php" );

$cube1 = new Cube();
$cube2 = new Cube();
$cube3 = new Cube();

$cube1->setX( 2 );
$cube1->setY( 5 );
$cube1->setZ( 6 );

$cube2->setX( 5 );
$cube2->setY( 5 );
$cube2->setZ( 5 );

$cube3->setX( 2 );
$cube3->setY( 4 );
$cube3->setZ( 10 );

print("<h1>Test Cube</h1>");
print( "<table border = \"1\">
			<tr><th>Cube</th><th>Area</th><th>Volume</th></tr>
			<tr><td>2 x 5 x 6</td><td>" . $cube1->getArea() . "</td><td>" . $cube1->getVolume() . "</td></tr>
			<tr><td>5 x 5 x 5</td><td>" . $cube2->getArea() . "</td><td>" . $cube2->getVolume() . "</td></tr>
			<tr><td>2 x 4 x 10</td><td>" . $cube3->getArea() . "</td><td>" . $cube3->getVolume() . "</td></tr>
			</table>" );

displayFooter();

?>