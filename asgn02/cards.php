<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Cards</title>
	<link rel="stylesheet" href="../css/style.css">
</head>

<body id="cards">

	<header>
		<h2>Cards</h2>
	</header>

	<?php

	$deck = array(
		's01.png', 's02.png', 's03.png', 's04.png', 's05.png', 's06.png', 's07.png', 's08.png',
		's09.png', 's10.png', 's11.png', 's12.png', 's13.png',
		'c01.png', 'c02.png', 'c03.png', 'c04.png', 'c05.png',
		'c06.png', 'c07.png', 'c08.png', 'c09.png', 'c10.png', 'c11.png', 'c12.png',
		'c13.png', 'd01.png', 'd02.png', 'd03.png', 'd04.png', 'd05.png', 'd06.png',
		'd07.png', 'd08.png', 'd09.png', 'd10.png', 'd11.png', 'd12.png', 'd13.png',
		'h01.png', 'h02.png', 'h03.png', 'h04.png', 'h05.png', 'h06.png', 'h07.png',
		'h08.png', 'h09.png', 'h10.png', 'h11.png', 'h12.png', 'h13.png' );

	foreach ( $deck as $card ) {
		echo "<img src=\"cards-images\\$card\" alt=\"$card\">";
	}

	?>

	<hr>

	<h1>Jack of Harts</h1>

	<?php

	echo "<img src=\"cards-images\\$deck[49]\" alt=\"Jack Heart\">";

	?>

	<hr>

	<h1>Spades</h1>

	<?php

	foreach ( $deck as $card ) {
		if ( substr( $card, 0, 1 ) == 's' )
			echo "<img src=\"cards-images\\$card\" alt=\"$card\">";
	}


	?>

	<hr>

	<h1>Shuffle</h1>

	<?php

	shuffle( $deck );
	foreach ( $deck as $card ) {
		echo "<img src=\"cards-images\\$card\" alt=\"$card\">";
	}

	?>

	<hr>

	<h1>Odd Cards</h1>
	
	<?php
	
	foreach($deck as $card) {
	$number = substr($card, 2, 1);
   	if($number % 2 !=0)
       echo "<img src=\"cards-images\\$card\" alt=\"$card\">";
}

	
	?>

</body>

</html>