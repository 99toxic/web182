<?php
include('../assets/layout.php');
include('../assets/config.php');
include('database/queries.php');

$jobTitle = $_POST['jobTitle'];

$title = "Web-182 | JobTitle2";
$date = "September 30, 2017";
$file = "jobTitle2.php";

displayHeader($date, $file, $title);

$connect=mysqli_connect(SERVER, USER, PW, DB);

testConnection($connect);

$userQuery = "SELECT firstName, lastName FROM personnel WHERE jobTitle='$jobTitle' ";

$result = mysqli_query($connect, $userQuery);

runQuery($result);

$numRows = rowsReturned($result);

if ($numRows == 0)

{
	print("No records found with query $userQuery");
}

else 
{ 
	displayjobTitle2query($result);
}


mysqli_close($connect);   // close the connection

displayFooter();

?>
