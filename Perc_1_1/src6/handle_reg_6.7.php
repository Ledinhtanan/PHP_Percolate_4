<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Registration</title>
	<style type="text/css" media="screen">
		.error { color: red; }
	</style>
</head>
<body>
<h1>Registration Results</h1>
<?php	// Script 6.7 - handle_reg.php #6

/*
 * This script receives seven values from register.html: 
 * email, password, confirm, year, terms, color, submit
 */

// enable error management
ini_set('display_errors',1);         // learn from my mistakes!
error_reporting (E_ALL | E_STRICT);  // turn on all error reporting

// Flag variable to track success
$okay = TRUE;

// validate the email address
if (empty($_POST['email'])) {
	print '<p class="error">Please enter your email address.</p>';
	$okay = FALSE;
}

// validate the password
if (empty($_POST['password'])) {
	print '<p class="error">Please enter your password.</p>';
	$okay = FALSE;
}

// check the two passwords for equality
if (trim($_POST['password']) != trim($_POST['confirm'])) {
	print '<p class="error">Your confirmed password does not match the original password</p>';
	$okay = FALSE;
}

// validate the year
if (is_numeric($_POST['year']) AND (strlen($_POST['year']) == 4)) {
	// Check that ther were born before 2012
	if ($_POST['year'] < 2012) {
		$age = 2012 - $_POST['year']; // calculate age this year
	} else {
		print '<p class="error">Either you entered your birth year wrong
		or you come from the future.</p>';
		$okay = FALSE;
	}
} else { // 'else' for the first conditional
	print '<p class="error">Please enter the year you were born as four digits</p>';
	$okay = FALSE;
}

/// validate the terms:
if (!isset($_POST['terms'])) {
	print '<p class="error">You must accept the terms.</p>';
	$okay = FALSE;
}

// validate the color:
if ($_POST['color'] == 'red') {
	$color_type = 'primary';
} elseif ($_POST['color'] == 'yellow') {
	$color_type = 'primary';
} elseif ($_POST['color'] == 'green') {
	$color_type = 'secondary';
} elseif ($_POST['color'] == 'blue') {
	$color_type = 'primary';
} else { // Problem!
	print '<p class="error">Please select your favorite color.</p>';
	$okay = FALSE;
}

// if there were no errors, print a success message
if ($okay) {
	print '<p>You have been successfully registered (but not really.)</p>';
	print "<p>You will turn $age this year</p>";
	print "<p>Your favorite color is a $color_type color.</p>";
}

?>
</body>
</html>
