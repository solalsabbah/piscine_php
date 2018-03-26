#!/usr/bin/php
<?PHP

$line = preg_replace('/ +/', ' ', trim($argv[1]));

$array = explode(" ", $line);

$rot = array_shift($array); 

$string = implode(" ", $array);

$res = $string.' '. $rot;

print($res);

?>
