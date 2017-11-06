<?php
include('../assets/layout.php');
include('../assets/config.php');
include('database/queries.php');

$hourlyWage = $_POST['hourlyWage'];
$jobTitle = $_POST['jobTitle'];

$title = "Web-182 | WageReport";
$date = "September 30, 2017";
$file = "wageReport.php";

displayHeader($date, $file, $title);

$connect=mysqli_connect(SERVER, USER, PW, DB);

testConnection($connect);

$userQuery = "SELECT  empID FROM personnel WHERE jobTitle='$jobTitle' AND hourlyWage >= '$hourlyWage'";

$result = mysqli_query($connect, $userQuery);

runQuery($result);

$numRows = rowsReturned($result);

if ($numRows == 0)

{
	print("No records found with query $userQuery");
}

else 
{ 
	displaywageReport1query($result, $jobTitle, $hourlyWage);
}

mysqli_close($connect);   // close the connection

displayFooter();

?>
