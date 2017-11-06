<?php
include( '../assets/layout.php' );

$title = "Web-182 | Game Character";
$date = "October 18, 2017";
$file = "GameCharacter.php";

displayHeader( $date, $file, $title );

include( "inc-game-character-object.php" );

$playerOneName= $_POST['playerOne'];
$playerTwoName= $_POST['playerTwo'];

$playerOne = new Game();
$playerTwo = new Game();
$playerOneScore = new Game();
$playerTwoScore = new Game();
$win = new Game();

$playerOne->setplayerName($playerOneName);
$playerTwo->setplayerName($playerTwoName);

$playerOneScore->setScore(1680);
$playerTwoScore->setScore(1530);

if ($playerOneScore->getScore() > $playerTwoScore-> getScore())
{
	$winnerName = $playerOne->getplayerName();
	$winnerScore = $playerOne->getScore();
}

else 
{
	$winnerName = $playerTwo->getplayerName();
	$winnerScore = $playerTwo->getScore();
}

print( "<h1>Game Character</h1>" );
print( "<table>
			<tr>Player One</tr>
			<tr><td>Player Name:</td><td>" . $playerOne->getPlayerName() . "</td></tr>
			<tr><td>Player Score:</td><td>" . $playerOneScore->getScore() . "</td></tr>
			</table>" );
print( "<table>
			<tr>Player Two</tr>
			<tr><td>Player Name:</td><td>" . $playerTwo->getPlayerName() . "</td></tr>
			<tr><td>Player Score:</td><td>" . $playerTwoScore->getScore() . "</td></tr>
			</table>" );
print( "<table>
			<tr><td>Winner is:</td><td>$winnerName</td></tr>
			</table>" );
			


displayFooter();
?>