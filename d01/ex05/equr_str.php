#!/usr/bin/php
<?php
if (count($argv) <= 1)
	return ;
$line = preg_replace("/ +/", " ", trim($argv[1], " "));
if (strlen($line) > 0)
	echo $line.PHP_EOL;
?>
