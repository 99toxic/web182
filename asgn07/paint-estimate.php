<?php
include('../assets/layout.php');
	
$title = "Web-182 | Paint Estimate";
$date = "October 12, 2017";
$file = "paint-estimate.php";

displayHeader($date, $file, $title);

include( 'inc-rectangle-object.php' );

$height= $_POST['height'];
$length= $_POST['length'];
$width= $_POST['width'];
	
	$longWall= new Rectangle();
	$shortWall= new Rectangle();

	$longWall->setX($height);
	$longWall->setY($length);
	$shortWall->setX($height);
	$shortWall->setY($width);

	$totalArea = (2 * $longWall->getArea()) + ( 2 * $shortWall->getArea());

	print("<h1>Paint Estimate</h1>");
	print("The total area is $totalArea square feet.");

displayFooter();
?>