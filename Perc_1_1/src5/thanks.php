<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Thank you!</title>
</head>
<body>

<?php	// Script 5.6 - thanks.php
ini_set('display_errors',1);         // learn from my mistakes!
error_reporting (E_ALL | E_STRICT);  // turn on all error reporting

$name = $_GET['name'];
$email = $_GET['email'];

print "Thank you, $name.<br />";
print "We will contact you at: $email";

?>
</body>
</html>
