<?PHP
	session_start();

if ($_GET['login'] && $_GET['passwd'] && $GET_['submit'] && $_GET['submit'] == "OK")
{
	
	$_SESSION['login'] = $_GET['login'];
	$_SESSION['passwd'] = $_GET['passwd'];
}

?>

<html>
    <head>
        <style>
        .centre
        {
			text-align:center;
        }
        body
        {
            background-color:#8181F7;
        }
        </style>
    </head>
    <body>
        <form method="get" action="index.php">
            <fieldset>
                <div class="centre">
                <p>
			<font face="Comic Sans MS">Identifiant :</font><input name="login" type="text" value="<?php echo $_SESSION['login']; ?>" />
            <br />
            <font face="Comic Sans MS">Mot de Passe :</font><input type="password" name="passwd" value="<?php echo $_SESSION['passwd']; ?>" />
            <br />
            <input type="submit" name="submit" value="OK" />
            <br />
                </p>
                </div>
            </fieldset>
        </form>
    </body>
</html>
