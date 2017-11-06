<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Web 182 | asgn02</title>
	<link rel="stylesheet" href="../css/style.css">
</head>

<body id="asgn02">

	<header>
		<h2>Assignment 2</h2>
	</header>

	<h1>Colors</h1>

	<?php
	$color = array( 'white', 'green', 'red', 'blue', 'black' );

	print( "<p>The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[2], the $color[1] lawn, the $color[0] house, the leaden sky. The new president and his first lady. - Richard M. Nixon</p>" );

	?>

	<hr>

	<h1>Capitals</h1>

	<?php
	$ceu = array(
		"Italy" => "Rome",
		"Luxembourg" => "Luxembourg",
		"Belgium" => "Brussels",
		"Denmark" => "Copenhagen",
		"Finland" => "Helsinki",
		"France" => "Paris",
		"Slovakia" => "Bratislava",
		"Slovenia" => "Ljubljana",
		"Germany" => "Berlin",
		"Greece" => "Athens",
		"Ireland" => "Dublin",
		"Netherlands" => "Amsterdam",
		"Portugal" => "Lisbon",
		"Spain" => "Madrid",
		"Sweden" => "Stockholm",
		"United Kingdom" => "London",
		"Cyprus" => "Nicosia",
		"Lithuania" => "Vilnius",
		"Czech Republic" => "Prague",
		"Estonia" => "Tallin",
		"Hungary" => "Budapest",
		"Latvia" => "Riga",
		"Malta" => "Valetta",
		"Austria" => "Vienna",
		"Poland" => "Warsaw"
	);

	foreach ( $ceu as $country => $capital ) {
		echo "<p>The capital of $country is $capital.</p>";
	}
	?>

	<hr>

	<h1>Delete an element</h1>

	<?php 

	$x = array(1, 2, 3, 4, 5);
	
	foreach($x as $value)
{
echo "<p>$value</p>" ;
}
	
	unset($x[3]);
	
	foreach($x as $value)
{
echo "<p>$value</p>" ;
}
	
?>

	<hr>

	<h1>JSON</h1>

	<?php 
	
	$book = array(
		
		"title" => "The Cuckoos Calling", 
		"author" => "Robert Galbraith",
 		"publisher" => "Little Brown");
	
	print("<p>Title: $book[title]</p><p>Author: $book[author]</p><p>Publisher: $book[publisher]</p>");
	
	echo "<br>";
	
?>

	<hr>

	<h1>Sort by ascending and descending</h1>

	<?php

	$order = array( "Sophia" => "31", "Jacob" => "41", "William" => "39", "Ramesh" => "40" );

	echo '<h2>Ascending order sort by value</h2>';

	asort( $order );

	foreach ( $order as $value ) {
		echo "<p>$value</p>";
	}

	echo '<h2>Ascending order sort by key</h2>';

	ksort( $order );

	foreach ( $order as $value ) {
		echo "<p>$value</p>";
	}

	echo '<h2>Descending order sorting by Value</h2>';

	arsort( $order );

	foreach ( $order as $value ) {
		echo "<p>$value</p>";
	}

	echo '<h2>Descending order sorting by key</h2>';

	krsort( $order );

	foreach ( $order as $value ) {
		echo "<p>$value</p>";
	}


	?>

	<hr>

	<h1>Temperatures</h1>

	<?php

	$temperatures = array( 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73 );
	
	$average = array_sum($temperatures) / count($temperatures);
	echo "<p>The average is $average.</p>";

	function listvalues( $value ) {
		echo "$value, ";
	}

	function printAverage( $array ) {
		$total = 0;
		foreach ( $array as $element ) {
			$total += $element;
		}

		echo number_format( $total / count( $array ), 1 );
	}

	echo "Recorded temperatures : ";
	array_walk( $temperatures, "listvalues" );
	echo "<br>";

	echo "Average Temperature is :";
	printAverage( $temperatures );
	echo "<br>";

	sort( $temperatures );
	echo "The five lowest Temperatures are: ";
	foreach ( $temperatures as $num => $val ) {
		if ( $num < 6 ) {
			echo $val;
			echo ",";
		}
	}

	echo "<br>";

	rsort( $temperatures );
	echo "The Five Highest Temperatures: ";
	foreach ( $temperatures as $num => $value ) {
		if ( $num < 6 ) {
			echo $value;
			echo ",";
		}
	}

	?>

	<hr>

	<h1>Merge</h1>

	<?php 
	
	$array1 = array(array(77, 87), array(23, 45));
	$array2 = array("w3resource", "com"); 

	echo '<pre>';

	$result = array_merge($array1, $array2);

	var_dump($result);

	echo"</pre>";

	?>

</body>

</html>