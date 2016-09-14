#!/usr/bin/php
<?php
if(count($argv) != 4){
	echo "Incorrect Parameters".PHP_EOL;
	return;
}
array_shift($argv);
$line = array();
foreach($argv as $ptr)
{
	$ptr = trim($ptr, " ");
	array_push($line, preg_replace("/[ \t]+/", '', trim($ptr, "\t")));
}
if ($line[1] == "+")
{
	$num = $line[0] + $line[2];
	echo $num.PHP_EOL;
}
elseif ($line[1] == "-")
{
	$num = $line[0] - $line[2];
	echo $num.PHP_EOL;
}
elseif ($line[1] == "*")
{
	$num = $line[0] * $line[2];
	echo $num.PHP_EOL;
}   
elseif ($line[1] == "/")
{
	$num = $line[0] / $line[2];
	echo $num.PHP_EOL;
}
elseif ($line[1] == "%")
{
	$num = $line[0] % $line[2];
	echo $num.PHP_EOL;
}
?>
