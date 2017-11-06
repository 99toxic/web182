<?php
include('../assets/layout.php');
include('../assets/config.php');
include('database/queries.php');

$title = "Web-182 | StaffReport1";
$date = "September 30, 2017";
$file = "staffReport1.php";

displayHeader($date, $file, $title);

$connect=mysqli_connect(SERVER, USER, PW, DB);

testConnection($connect);

$userQuery = "SELECT * FROM personnel"; 

$result = mysqli_query($connect, $userQuery);

runQuery($result);

$numRows = rowsReturned($result);

if ($numRows == 0)

{
	print("No records found with query $userQuery");
}
 
 else
{ 
	displaySR1Results($result);
}

mysqli_close($connect);   // close the connection

displayFooter();
 
?>

