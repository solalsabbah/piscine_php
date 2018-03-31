<?PHP
session_start();
if ($_SESSION['logged_on_user'] != "" && $_POST['login'] != "")
{
	$cont = serialize(array(array('time' => time(), 'login' => $_SESSION['logged_on_user'], 'msg' => $_POST['msg'])));
	if (file_exists("../private/chat"))
	{
		file_put_contents("../private/chat", $cont);
	}
	else
	{
		$file = fopen("../prive/chat", 'c+');
		file_put_contents("../private/chat", $cont);
		//need to add flock
	}
		
	}

?>
<html>
<script langage="javascript">top.frames['chat'].location = 'chat.php';</script>
<head></head>
<body>

	<form method="POST" action="">  
		<input type="text" name="msg" value ="" />
		<input type="submit" name="submit" value="ENVOYER">
	</form>

</body>
</html>
<?PHP
}
?>
