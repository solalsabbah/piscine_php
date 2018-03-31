<?PHP
include ('auth.php');
session_start();


if (auth($_POST['login'], $_POST['passwd']) == TRUE)
{
	$_SESSION['logged_on_user'] = $_POST['login'];	
//	echo "OK\n";
?>
	<iframe  name="chat" src="chat.php" width="80%" height="550px" align="middle" style="border:2px solid red"></iframe>
	<iframe name="speak" src="speak.php" width="80%" height="50px" align="middle" style="border:2px solid green"></iframe>
<?PHP
}

else
{
	$_SESSION['logged_on_user'] = "";
	echo "ERROR\n";
}

?>
