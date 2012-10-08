<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Lucky Numbers</title>
</head>
<body>

<?php	// Script 4.6 - random.php

/* This script generates three random numbers */

ini_set('display_errors',1);         // learn from my mistakes!
error_reporting (E_ALL | E_STRICT);  // turn on all error reporting

// Create three random numbers
$n1 = rand(1,99);
$n2 = rand(1,99);
$n3 = rand(1,99);

$randmax = getrandmax();

print "<p>The maximum random number for this system: $randmax<br /><br /></p>";

// what about "mt_rand()"?
$mtrand = mt_rand();
print "<p>The mt_rand random number: $mtrand<br /><br /></p>";


// Print out the numbers
print "<p>Your lucky numbers are:<br />
$n1<br />
$n2<br />
$n3</p>";

?>
</body>
</html>
