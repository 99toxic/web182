<?php

if ($_SERVER['HTTP_HOST'] == "nickscreativedesign.com")
{
	define('SERVER', 'localhost' );
	define('USER', 'toxic_wbip');
	define('PW', 'Techn9ne');
	define('DB', 'toxic_test');
}

else {
	define('SERVER', 'localhost');
	define('USER', 'wbip');
	define('PW', 'wbip123');
	define('DB', 'test');
}