<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Forum Posting</title>
</head>
<body>

<?php	// Script 5.4 - handle_post.php #3
ini_set('display_errors',1);         // learn from my mistakes!
error_reporting (E_ALL | E_STRICT);  // turn on all error reporting

// Get the values from the $_POST array;
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$posting = nl2br($_POST['posting']);
$html_post = htmlentities($_POST['posting']);
$strip_post = strip_tags($_POST['posting']);


// create a full name variable:

$name= $first_name . ' ' . $last_name;

// Print a message:
print "<div>Thank you, $name, for your posting:
<p>Original: $posting</p>
<p>Entity: $html_post</p>
<p>Stripped: $strip_post</p>
</div>";


?>
</body>
</html>
