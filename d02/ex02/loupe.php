#!/usr/bin/php
<?PHP

if ($argv[1])
	$file = file($argv[1]);

$str = implode($file);


$res = preg_replace_callback("#href=.+=#", function ($word) { print($word[1]."\n"); return strtoupper($word[0]);}, $str);
echo "\n".$res;
?>
