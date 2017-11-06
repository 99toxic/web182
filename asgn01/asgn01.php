<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Web 182 | asgn01</title>
<link rel="stylesheet" href="../css/style.css">
</head>

<body>

	<?php
	
		$firstname= $_POST['FirstName'];
		$language= $_POST['language'];
		$music= $_POST['music'];
		$pass= $_POST['password'];
	
		if ($pass != 1234){
			echo 'Please Enter The Correct Password';
		}
	
		elseif(strlen($firstname)==0){
				echo 'Please enter first name';
			}
			
		elseif(strlen($language)==0){
				echo 'Please select a language';
			}
			
		elseif(!isset($music)){
				echo 'Please select type of music';
			}
	
		else {
			
			echo '<h1>Results</h1>';
			
			echo "<p>First Name: $firstname</p>";
				
			echo "<p>Programming Language: $language</p>";
		
			echo "<h3>Musical Choices</h3>";
			
			foreach($music as $value) {
				echo "$value<br>";
			}
		}
		
	?>
	
</body>
</html>