#!/usr/bin/php
<?PHP

if ($argc != 2)
	return (0);


$line = preg_replace('/ +/', ' ', trim($argv[1])); //rajouter un \n ?? 
print($line);

?>
