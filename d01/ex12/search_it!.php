#!/usr/bin/php
<?php
array_shift($argv);
if (count($argv) <= 1)
	return ;
$search = $argv[0];
array_shift($argv);
$array = array(array(), array());
foreach ($argv as $ptr)
{
	$temp = explode(":", trim($ptr, " "));
	if (in_array($temp[0], $array[0]))
	{
		for ($x = 0; $x < count($array[0]); $x++)
			$array[1][array_search($temp[0], $array[0])] = $temp[1];
	}
	else
	{
		array_push($array[0], $temp[0]);
		array_push($array[1], $temp[1]);
	}
}
if (array_search($search, $array[0]))
	echo $array[1][array_search($search, $array[0])] . PHP_EOL;
else
	return ;
?>
