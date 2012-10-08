<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>No Soup for You!</title>
</head>
<body>
<h1>Mmm...soups</h1>
<?php	// Script 7.1 - soups1.php
/* this script creates and prints out an array */

// address error management here...
ini_set('display_errors',1);         // learn from my mistakes!
error_reporting (E_ALL | E_STRICT);  // turn on all error reporting

// create the array:
$soups = array (
		'Monday' => 'Clam Chowder',
		'Tuesday' => 'White Chicken Chili',
		'Wednesday' => 'Vegetarian'
		);

// Try tp print the array:
print "<p>$soups</p>";

// Print the contents of the array:
print_r ($soups);

?>
</body>
</html>
