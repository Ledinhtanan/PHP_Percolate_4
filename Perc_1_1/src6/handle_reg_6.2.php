<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Registration</title>
</head>
<body>
<h1>Registration Results</h1>
<?php	// Script 6.2 - handle_reg.php

/*
 * This script receives seven values from register.html: 
 * email, password, confirm, year, terms, color, submit
 */

// enable error management
ini_set('display_errors',1);         // learn from my mistakes!
error_reporting (E_ALL | E_STRICT);  // turn on all error reporting

// Flag variable to track success
$okay = TRUE;

// if there were no errors, print a success message
if ($okay) {
	print '<p>You have been successfully registered (but not really.)</p>';
}

?>
</body>
</html>
