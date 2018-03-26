#!/usr/bin/php
<?PHP

function ft_is_sort($tab)
{

$tmp = $tab;

sort($tab);

if ($equality = ($tab === $tmp) == 1)
	return (1);
return (0);

// return true or false 

}
?>
