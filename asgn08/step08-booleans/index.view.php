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
	
	<h1>Tasks for the day!</h1>
		
	<ul>
		
		<li>
			<strong>Title:</strong>
			<?= $tasks['title']; ?>
		</li>
		
		<li>
			<strong>Due Date:</strong>
			<?= $tasks['due']; ?>
		</li>
		
		<li>
			<strong>Person Responsible:</strong>
			<?= $tasks['assigned_to']; ?>
		</li>
		
		<li>
			<strong>Status:</strong>
			<?= $tasks['completed'] ? 'completed' : 'Incomplete'; ?>
		</li>
	
	</ul>	
	
</body>
</html>