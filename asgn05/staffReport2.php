
<?php
include('../assets/layout.php');
include('../assets/config.php');
include('database/queries.php');

$title = "Web-182 | StaffReport2";
$date = "September 30, 2017";
$file = "staffReport2.php";

displayHeader($date, $file, $title);

$connect=mysqli_connect(SERVER, USER, PW, DB);

testConnection($connect);

$userQuery = "SELECT empID, firstName, lastName, jobTitle, hourlyWage FROM personnel WHERE jobTitle='manager' OR jobTitle='accountant'"; 

$result = mysqli_query($connect, $userQuery);

runQuery($result);

$numRows = rowsReturned($result);

if ($numRows == 0)

{
	print("No records found with query $userQuery");
}

else
{ 
	displaySR2Results($result);
}

mysqli_close($connect);   // close the connection
 
displayFooter();

?>

