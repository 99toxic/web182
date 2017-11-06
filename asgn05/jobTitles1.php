
<?php
include('../assets/layout.php');
include('../assets/config.php');
include('database/queries.php');

$id = $_POST['id'];

$title = "Web-182 | JobTitle1";
$date = "September 30, 2017";
$file = "jobTitle1.php";

displayHeader($date, $file, $title);

$connect=mysqli_connect(SERVER, USER, PW, DB);

testConnection($connect);

$userQuery = "SELECT empID, jobTitle, hourlyWage FROM personnel WHERE empID='$id' ";

$result = mysqli_query($connect, $userQuery);

runQuery($result);

$numRows = rowsReturned($result);

if ($numRows == 0)

{
	print("No records found with query $userQuery");
}

else 
{ 
	displayjobTitlequery($result);
}

mysqli_close($connect);   // close the connection
 
displayFooter();

?>