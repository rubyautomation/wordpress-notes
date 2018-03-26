<?php

	include_once '/var/www/some-wordpress-site/wp-includes/class-phpass.php';

	$p = new PasswordHash(8, TRUE);
	$hashed = $p->HashPassword($_GET['p']);

	echo "<p>Password hash for " . $_GET['p'] . " is " . $hashed . "</p>";
?>

