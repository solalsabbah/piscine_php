#!/usr/bin/php
<?PHP

function epur_str($line) {

	$line = preg_replace('/ +/', ' ', trim($line)); //rajouter un \n ??
	$line = explode(" ", $line);
	return ($line);
}

if ($argc < 2)
	return ;

$val = 1;
$tab2 = array();

$numeric = array();
$ascii = array();
$alpha = array();
while($val < $argc)
{
	$tab = epur_str($argv[$val]);
	$tab2 = array_merge($tab, $tab2);
	$val++;
}


foreach ($tab2 as $element)
{
	if (is_numeric($element))
		$numeric[] = $element;
	else if(!ctype_alnum(substr($element, 0, 1)))
		$ascii[] = $element;
	else
		$alpha[] = $element;
}

sort($numeric, SORT_STRING);
sort($ascii, SORT_NATURAL | SORT_FLAG_CASE);
sort($alpha, SORT_NATURAL | SORT_FLAG_CASE);

$res = array_merge($alpha, $numeric, $ascii);
foreach ($res as $elem)
	echo $elem . "\n"
?>
