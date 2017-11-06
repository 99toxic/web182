<?php
include('../assets/layout.php');
include('../assets/config.php');
include('database/queries.php');

$title = "Web-182 | Raises";
$date = "September 30, 2017";
$file = "raises.php";

displayHeader($date, $file, $title);

$connect=mysqli_connect(SERVER, USER, PW, DB);

testConnection($connect);

$userQuery = "SELECT empID, firstName, lastName FROM personnel WHERE hourlyWage < '10.00' ";

$result = mysqli_query($connect, $userQuery);

runQuery($result);

$numRows = rowsReturned($result);

if ($numRows == 0)

{
	print("No records found with query $userQuery");
}

else 
{ 
	displayraisesquery($result);
}

mysqli_close($connect);   // close the connection

displayFooter();

?>
