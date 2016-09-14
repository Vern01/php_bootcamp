#!/usr/bin/php
<?php
array_shift($argv);
$num = array();
$alpha = array();
$other = array();
if (count($argv) > 0){
	foreach($argv as $ptr){
		$line = preg_replace("/ +/", " ", trim($ptr," "));
		$tab = explode(" ", $line);
		foreach($tab as $stuff){
			if (ctype_digit($stuff))		
				array_push($num, $stuff);
			elseif(ctype_alpha($stuff))
				array_push($alpha, $stuff);
			else 
				array_push($other, $stuff);
		}
	}
}
sort($num);
asort($alpha);
sort($other);
foreach($alpha as $ptr)
	print_r($ptr.PHP_EOL);
foreach($num as $ptr)
	print_r($ptr.PHP_EOL);
foreach($other as $ptr)
	print_r($ptr.PHP_EOL);
?>
