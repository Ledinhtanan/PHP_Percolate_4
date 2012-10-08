<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Larry Ullman's Books and Chapters</title>
</head>
<body>
<h1>Some of Larry Ullman's Books</h1>

<?php	// Script 7.4 - books.php
/* This script creates and prints out a multidimensional array */

ini_set('display_errors',1);         // learn from my mistakes!
error_reporting (E_ALL | E_STRICT);  // turn on all error reporting

$phpvqs = array(1 => 'Getting Started with PHP', 'Variables', 'HTML Forms and PHP', 
		'Using Numbers');

// Create the 2nd array
$phpadv = array(1 => 'Advanced PHP Techniques', 'Developing Web Applications', 
		'Advanced Database Concepts', 'Security Techniques');

// Create the 3rd array
$phpmysql = array(1 => 'Introduction to PHP', 'Programming with PHP', 
		'Creating Dynamic Websites', 'Introduction to MySQL');

// Create the multidimensional array
$books = array(
		'PHP VQS' => $phpvqs,
		'PHP Advanced VQP' => $phpadv,
		'PHP and MySQL VQP' => $phpmysql
		);

// Print out some values:
print "<p>The third chapter of my first book is: <i>{$books['PHP VQS'][3]}</i></p>";
print "<p>The first chapter of my second book is: <i>{$books['PHP Advanced VQP'][1]}</i></p>";
print "<p>The fourth chapter of my first book is: <i>{$books['PHP and MySQL VQP'][4]}</i></p>";

// See what happens with foreach:
foreach ($books as $title => $chapters) {
	print "<p>$title";
	foreach ($chapters as $number => $chapter) {
		print "<br />Chapter $number is $chapter";
	}
	print "</p>";
}

print "<pre>";
print_r ($books);
print "</pre>"

?>
</body>
</html>
