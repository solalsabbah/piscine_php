#!/usr/bin/php
<?PHP

$i = 2;
while ($i < $argc)
{
	$array = explode(":",$argv[$i]);
	if ($argv[1] == $array[0])
		$str = ($array[1]."\n");
	$i++;
}
	echo $str;

?>
