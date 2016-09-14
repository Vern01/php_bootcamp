#!/usr/bin/php
<?php
if(count($argv) != 2){
	echo "Incorrect Parameters".PHP_EOL;
	return ;
}
array_shift($argv);
$ptr = trim($argv[0], " ");
$line = preg_replace("/[ \t]+/", '', trim($ptr, "\t"));
$first = NULL;
$second = NULL;
for ($x = 0; $x < strlen($line); $x++)
{
	if (isset($op))
	{
		$second = $second . $line[$x];
	}
	else
	{
		if (!ctype_digit($line[$x]))
			$op = $line[$x];
		else
			$first = $first . $line[$x];
	}
}

if ($op == "+")
{
	$num = $first + $second;
	echo $num.PHP_EOL;
}
elseif ($op == "-")
{
	$num = $first - $second;
	echo $num.PHP_EOL;
}
elseif ($op == "*")
{
	$num = $first * $second;
	echo $num.PHP_EOL;
}   
elseif ($op == "/")
{
	$num = $first / $second;
	echo $num.PHP_EOL;
}
elseif ($op == "%")
{
	$num = $first% $second;
	echo $num.PHP_EOL;
}
?>
