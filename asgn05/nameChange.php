<?php
include('../assets/layout.php');
include('../assets/config.php');
include('database/queries.php');

$title = "Web-182 | NameChange";
$date = "September 30, 2017";
$file = "nameChange.php";

displayHeader($date, $file, $title);

$connect=mysqli_connect(SERVER, USER, PW, DB);

testConnection($connect);

$userQuery = "UPDATE personnel SET lastName='Jackson' jobTitle='manager' WHERE empID='12353' ";


displaynameChangequery($result);


mysqli_close($connect);   // close the connection
 
displayFooter();

?>