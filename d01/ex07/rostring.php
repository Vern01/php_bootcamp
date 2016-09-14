#!/usr/bin/php
<?php
array_shift($argv);
if (count($argv) <= 0)
	return ;
$line = preg_replace("/ +/", ' ', $argv[0]);
$array = explode(" ", $line);
$last = $array[0];
array_shift($array);
foreach ($array as $ptr)
	echo $ptr . " ";
echo $last.PHP_EOL;
?>
