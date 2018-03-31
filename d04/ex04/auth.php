<?PHP

function auth($login, $passwd) {

$data = unserialize(file_get_contents("../private/passwd"));

$var = 0;
foreach ($data as $key => $field)
{
	if ($field['login'] == $login && $field['passwd'] == hash("whirlpool", $passwd))
	{
		return (TRUE);
	}
} 
return (FALSE);
}

?>
