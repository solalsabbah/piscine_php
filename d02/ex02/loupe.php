#!/usr/bin/php
<?PHP

if ($argv[1])
	$file = file($argv[1]);

$str = implode($file);
print($str);
?>
