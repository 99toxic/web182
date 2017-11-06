<!DOCTYPE html>
<!--	Author: 
		Date:	
		File:	staffReport3.php
		Purpose:MySQL Exercise
-->

<html>
<head>
	<title>MySQL Query</title>
	<link rel ="stylesheet" type="text/css" href="../css/style.css" />
</head>

<body>
<?php

$server = "localhost";
$user = "wbip";
$pw = "wbip123";
$db = "test";

$connect=mysqli_connect($server, $user, $pw, $db);

if( !$connect) 
{
	die("ERROR: Cannot connect to database $db on server $server 
	using user name $user (".mysqli_connect_errno().
	", ".mysqli_connect_error().")");
}
$userQuery = "SELECT firstName, lastName, jobTitle FROM personnel WHERE jobTitle='manager' OR jobTitle='sales' ORDER BY jobTitle, lastName"; //I added the SELECT
$result = mysqli_query($connect, $userQuery);

if (!$result) 
{
	die("Could not successfully run query ($userQuery) from $db: " .	
		mysqli_error($connect) );
}

if (mysqli_num_rows($result) == 0) 
{
	print("No records found with query $userQuery");
}
else 
{ 
	print("<h1>LIST OF EMPLOYEES</h1>");

	print("<table border = \"1\">");
	print("<tr><th>First Name</th><th>Last Name</th><th>Job Title</th></tr>");

	while ($row = mysqli_fetch_assoc($result)) //I added this while loop
	{
		print("<tr><td>".$row['firstName']."</td><td>".$row['lastName']."</td><td>".$row['jobTitle']."</td></tr>");
	}

	
	print("</table");
}

mysqli_close($connect);   // close the connection
 
?>

</body>
</html>
