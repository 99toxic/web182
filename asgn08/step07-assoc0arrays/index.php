<?php

$person = [
	
	'age:' => 34,
	
	'hair:' => 'brown',
	
	'career:' => 'web tech'
	
];


$person['name:'] = 'Nick';

unset($person['age']);



$tasks = [
	
	'title:' => 'bills',
	
	'due:' => 'today',
	
	'assigned_to:' => 'everyone',
	
	'completed' => 'no'
	
];


require 'index.view.php';