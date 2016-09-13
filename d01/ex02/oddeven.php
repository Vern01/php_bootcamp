#!/usr/bin/php
<?php
echo ("Enter a number: ");
while ($line = fgets(STDIN))
{
	$line = trim($line);
	if (ctype_digit($line))
	{
		if ($line & 1)
			echo ("The number " . $line . " is odd\n");
		else
			echo ("The number " . $line . " is even\n");
	}
	else
		echo ("'" . $line . "' is not a number\n");
	echo ("Enter a number: ");
}
?>
