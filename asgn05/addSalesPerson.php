
<?php
include('../assets/layout.php');
include('../assets/config.php');
include('database/queries.php');

$title = "Web-182 | AddSalesPerson";
$date = "September 30, 2017";
$file = "addSalesPerson.php";

$empID = $_POST['empID'];
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];

displayHeader($date, $file, $title);

$connect=mysqli_connect(SERVER, USER, PW, DB);

testConnection($connect);

$userQuery = "INSERT INTO personnel (empID, firstName, lastName, jobTitle, hourlyWage) VALUES ('$empID', '$firstName', '$lastName', 'sales', '8.25')"; 


displayASPquery($result, $empID, $firstName, $lastName);


mysqli_close($connect);   // close the connection
 
displayFooter();

?>
