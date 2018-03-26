#!/usr/bin/php
<?PHP

function ft_split($string) {

	$list = explode(" ", $string);

	$result = array();

foreach($list as $value)
{
	if (!empty($value))
		$result[] = $value;
}

sort($result);

if ($result == NULL)
	unset($result);
unset($list);
return ($result);

}
?>
