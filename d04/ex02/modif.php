<?php

if (file_exists("../private/passwd") == FALSE)
	exit ("ERROR\n");

$data = unserialize(file_get_contents("../private/passwd"));

$var = 0;
foreach ($data as $key => $field)
{
	if ($field['login'] == $_POST['login'] && $field['passwd'] == hash("whirlpool", $_POST['oldpw']) && $_POST['submit'] == "OK")
	{
		$data[$key]['passwd'] = hash("whirlpool", $_POST['newpw']);
		$var = 1;
	}
}
if ($var == 1)
{
	file_put_contents("../private/passwd", serialize($data));
	echo "OK\n";
}
elseif($var == 0)
	echo "ERROR\n";

?>
