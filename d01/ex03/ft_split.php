<?php
function ft_split($line)
{
	$line = preg_replace("/[ \t]+/", ' ', trim($line, "\t"));
	$array = explode(" ", $line);
	sort($array);
	return $array;
}
?>
