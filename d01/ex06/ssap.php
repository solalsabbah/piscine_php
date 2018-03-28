#!/usr/bin/php
<?PHP

function epur_str($line) {

	$line = preg_replace('/ +/', ' ', trim($line)); //rajouter un \n ??
	$line = explode(" ", $line);
	return ($line);
}

$val = 1;
$tab2 = array();

while($val < $argc)
{
	$tab = epur_str($argv[$val]);
	$tab2 = array_merge($tab, $tab2);
	$val++;		
}

$sort = sort($tab2);

foreach($tab2 as $elem)
	echo $elem."\n";
?>
