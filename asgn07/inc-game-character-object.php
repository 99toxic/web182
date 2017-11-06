<?php
class Game
{
	private $playerName;
	private $score;

	public function getplayerName()
	{
		return $this->playerName;
	}
	
	public function setplayerName($playerName)
	{
		$this->playerName = $playerName;
	}
	
	public function getScore()
	{
		return $this->score;
	}
	
	public function setScore($score)
	{
		$this->score = $score;
	}
	
} // end of class definition
?>