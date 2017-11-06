<?php

function testConnection($connect)
{
	if( !$connect) 
	{
		die("ERROR: Cannot connect to database $db on server $server 
		using user name $user (".mysqli_connect_errno().
		", ".mysqli_connect_error().")");
	}
}

function runQuery($result)
{
  if (!$result) 
  {
    die("Could not successfully run query ($userQuery) from $db: " .	
      mysqli_error($connect) );
  }
}

function rowsReturned($result)
{
  $numRows = mysqli_num_rows($result); 
  return $numRows;
}

//STAFF REPORT 1
function displaySR1Results($result)
{
    print("<h1>LIST OF EMPLOYEES</h1>");
  
    print("<table border = \"1\"> ");
    print("<tr><th>Employee ID</th><th>Job Title</th></tr>");
  
    while($row = mysqli_fetch_assoc($result))
    {
      print("<tr><td>{$row['empID']} </td><td>{$row['jobTitle']}</td></tr>");
    }
    print("</table"); 
}

//STAFF REPORT 2
function displaySR2Results($result)
{
    print("<h1>LIST OF EMPLOYEES</h1>");

	print("<table border = \"1\">");
	print("<tr><th>Employee ID</th> <th>First Name</th><th>Last Name</th><th>Job Title</th><th>Hourly Wage</th></tr>");
	
	while($row = mysqli_fetch_assoc($result))
	{
	print("<tr><td>{$row['empID']} </td><td>{$row['firstName']} </td><td>{$row['lastName']}</td><td>{$row['jobTitle']}</td><td>{$row['hourlyWage']}</td></tr>");
	}
	
	
	print("</table");
}

//STAFF REPORT 3
function displaySR3Results($result)
{
	
	print("<h1>LIST OF EMPLOYEES</h1>");

	print("<table border = \"1\">");
	print("<tr><th>First Name</th><th>Last Name</th><th>Job Title</th></tr>");

	while ($row = mysqli_fetch_assoc($result)) 
	{
		print("<tr><td>".$row['firstName']."</td><td>".$row['lastName']."</td><td>".$row['jobTitle']."</td></tr>");
	}

	
	print("</table");
	
}

//Cleaners
function displaycleanersresults($result)
{
	
	$row = mysqli_fetch_assoc($result);
	$lowestWage = $row['hourlyWage'];

		print("<h1>CLEANING STAFF</h1>");
		
			print ("<p>The lowest hourly wage of cleaning staff is . $".
			   number_format($lowestWage, 2)."</p>");
	
}

//Job Title 1 
function displayjobTitlequery($result)
{
	print("<h1>RESULTS</h1>");
	print("<table border = \"1\">");
	print("<tr><th>EMP ID</th><th>Job Title</th>
		 <th>Hourly Wage</th></tr>");
	
	while ($row = mysqli_fetch_assoc($result)) 
	{
		print("<tr><td>".$row['empID']."</td><td>".$row['jobTitle']."</td><td>".$row['hourlyWage']."</td></tr>");
	}

	print ("</table>");
}

//Job Title 2 
function displayjobTitle2query($result)
{
	print("<h1>RESULTS</h1>");
	print("<table border = \"1\">");
	print("<tr><th>FIRST NAME</th><th>LAST NAME</th></tr>");
	
	while ($row = mysqli_fetch_assoc($result)) 
	{
		print("<tr><td>".$row['firstName']."</td><td>".$row['lastName']."</td></tr>");
	}
	
	print ("</table>");
}

//Raises 
function displayraisesquery($result)
{
	print("<h1>LIST OF EMPLOYEES WHO NEED A RAISE</h1>");
	
	while ($row = mysqli_fetch_assoc($result))
	{
		print("<p> Employee ".$row['empID']." needs a raise!</p>");
	}
}

//Name Change 
function displaynameChangequery($result)
{
	print("	<h1>UPDATE</h1>");
	print ("<p>The employee update has been completed.</p>");

}

//Wage Report 1 
function displaywageReport1query($result, $jobTitle, $hourlyWage)
{
	print("<h1>RESULTS</h1>");
	print("<p>The following employees have the $jobTitle job title, and an hourly wage of $".
			number_format($hourlyWage, 2)." or higher:</p>");
			
	print("<table border = \"1\">");
	print("<tr><th>EMP ID</th></tr>");
	
	while ($row = mysqli_fetch_assoc($result))
	{
		print("<tr><td>".$row['empID']."</td></tr>");
	}

	print ("</table>");
}

//Add Sales Person
function displayASPquery($result, $empID, $firstName, $lastName)
{
	print("	<h1>ADD A NEW PERSONNEL RECORD</h1>");
	print ("<p>The following record was added to the personnel table:</p>");
	print("<table border='0'>
			<tr><td>EMPLOYEE ID</td><td>$empID</td></tr>
			<tr><td>FIRST NAME</td><td>$firstName</td></tr>
			<tr><td>LAST NAME</td><td>$lastName</td></tr>		
			<tr><td>JOB TITLE</td><td>Sales</td></tr>
			<tr><td>HOURLY WAGE</td><td>$8.25</td></tr>
			</table>");
}