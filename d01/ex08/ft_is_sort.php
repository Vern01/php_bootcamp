<?php

function	ft_rev_check($tab)
{
	$def = $tab;
	rsort($tab);
	foreach ($tab as $key => $value)
	{
		if ($value != $def[$key])
		{
			echo "Entered" . PHP_EOL;
			return (false);
		}
	}
	return (true);
}

function	ft_is_sort($tab)
{
	$def = $tab;
	sort($tab);
	foreach ($tab as $key => $value)
	{
		if ($value != $def[$key])
			return (ft_rev_check($def));
	}
	return (true);
}
?>
