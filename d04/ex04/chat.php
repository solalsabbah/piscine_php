<?PHP
//if (file_exists("../private/passwd") == FALSE)
//	exit ("ERROR\n");
date_default_timezone_set('Europe/Paris');

$data = unserialize(file_get_contents("../private/passwd"));

foreach ($data as $field)
{
	echo "[".date("H:i", $field['time'])]."] ";
	echo "<b>";
	echo $field['login'];
	echo "</b>: ";
	echo $field['msg'];
	echo "<br />";
	
}
?>
