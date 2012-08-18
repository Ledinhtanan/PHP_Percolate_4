<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Pursue 2.1</title>
</head>
<body>

<?php	// Script Pursue_2_1 - Pursue_2_1.php

// this is supposed to be a script that uses some variables and prints their values

// try using variables of different scalar types

$float1 = 1.2;
$float2 = 2.3;

print "<h1>FLoating point variables</h1><br />float1 = $float1, float2 = $float2<br />";

$array1[0] = "zero";
$array1[1] = "one";
$array1[2] = "two";

// note that array1[3] was not initialized.  It generates an error at run time.
print "<h1>Array values</h1><br /> $array1[0] - $array1[1] - $array1[2] - $array1[3]<br />";


?>
</body>
</html>
