#!/usr/bin/php
<?PHP

if ($argc != 4)
	exit ("Incorrect Parameters\n");


$a = trim($argv[1]);
$b = trim($argv[3]);
$c = trim($argv[2]);

if ($c == "-")
	print($a - $b."\n");
if ($c == "+")
	print($a + $b."\n");
if ($c == "*")
	print($a * $b."\n");
if ($c == "/")
	print($a / $b."\n");
if ($c == "%")
	print($a % $b."\n");

?>
