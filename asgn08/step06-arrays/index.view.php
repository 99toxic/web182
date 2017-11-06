<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	
	<style>
	
		header {
			
			background: #e3e3e3;
			
			padding: 2em;
			
			text-align: center;
		}
	
	</style>
	
</head>

<body>
	
	<ul>
	
		<?php foreach ($names as $name) : ?>
		
			<li><?= $name; ?></li>
		
		<?php endforeach; ?>
		
		<?php 
		
			foreach ($names as $name) {
				
				echo "<li><strong>Item:</strong> $name </li>";
				
			}
		?>
		
	</ul>
	
	<ul>
	
		<?php foreach ($animals as $animal) : ?>
		
			<li><?= $animal; ?></li>
		
		<?php endforeach; ?>
	
	</ul>
	
	
</body>
</html>