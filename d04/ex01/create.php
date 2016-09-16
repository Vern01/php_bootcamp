<?php
if ($_POST["submit"] == "OK")
{
	if (!empty ($_POST["login"]) && !empty ($_POST["passwd"]))
		echo "OK\n";
	else
		echo "ERROR\n";
}
?>
