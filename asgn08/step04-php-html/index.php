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
	
	<header>
	
		<h1>
			
			<?= "Hello," . htmlspecialchars($_GET['name']); ?>
			
		</h1>
	
	</header>
	
</body>
</html>