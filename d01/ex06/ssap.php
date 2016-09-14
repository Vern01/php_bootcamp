#!/usr/bin/php
<?php
array_shift($argv);
	$array = array();
	if (count($argv) <= 0)
		return ;
	foreach ($argv as $ptr)
	{
		$line = preg_replace("/ +/", " ", trim($ptr, " "));
		$tab = explode(" ", $line);
		foreach ($tab as $string)
			array_push($array, $string);
	}
	sort($array);
	foreach ($array as $section)
		echo $section.PHP_EOL;
?>
