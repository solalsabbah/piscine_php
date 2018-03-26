#!/usr/bin/php
<?PHP

$str = trim(preg_replace("#[ \t]+#", " ", $argv[1]));
	echo $str."\n";
 
?>
