<?php

function check_user()
{
	if (!file_exists("/private/passwd"))
	{
		if (!file_exists("private") && !@mkdir('private', 0777))
		{
			$e = error_get_last();
			echo $e['message'];
		}
		$array = array('login' => array(), 'passwd' => array());
		$array[0]['login'] = $_POST['login'];
		$array[0]['passwd'] = hash("whirlpool", $_POST['passwd']);
		file_put_contents("./private/passwd", serialize($array));
		echo "Complete task" . PHP_EOL;
	}
	else
		echo "oops";
}

if ($_POST["submit"] == "OK")
{
	if (!empty ($_POST["login"]) && !empty ($_POST["passwd"]))
	{
		check_user();
		echo "OK\n";
	}
	else
		echo "ERROR\n";
}
?>
