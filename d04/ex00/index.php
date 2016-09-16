<?php
session_start();
if ($_GET["submit"] == "OK")
{
	$_SESSION["user"] = $_GET["login"];
	$_SESSION["pass"] = $_GET["passwd"];
}
?>
<html><body>
<form ACTION="index.php" METHOD="get">
	Username: <input TYPE="text" NAME="login" VALUE="<?php echo $_SESSION["user"];?>"/>
	<br />
	Password: <input TYPE="password" NAME="passwd" VALUE="<?php echo $_SESSION["pass"];?>"/>
	<input TYPE="submit" NAME="submit" VALUE="OK">
</form>
</body></html>
