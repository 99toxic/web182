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
	
		<?php foreach ($person as $key => $feature) : ?>
		
			<li><strong><?= $key; ?></strong> <?=$feature; ?></li>
		
		<?php endforeach; ?>
	</ul>
	
	</br>
	
	<ul>
		
		<?php foreach ($tasks as $key => $data) : ?>
		
			<li><strong><?= $key; ?></strong> <?=$data; ?></li>
		
		<?php endforeach; ?>
	
	</ul>
	
	
</body>
</html>