#!/usr/bin/php
<?PHP

if ($argc < 2) 
	return (0);

$line = preg_replace('/ +/', ' ', trim($argv[1]));

$array = explode(" ", $line);

$rot = array_shift($array); 

$string = implode(" ", $array);

$res = trim($string.' '. $rot);

print($res."\n");

?>
