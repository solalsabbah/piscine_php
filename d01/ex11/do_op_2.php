#!/usr/bin/php
<?PHP

if ($argc != 2)
	exit ("Incorrect Parameters\n");


$string = trim(preg_replace('/\s+/', ' ', $argv[1]));


$array = explode(" ", $string);

$array = explode("+", $string);
	if ($array[0] != $string)
	{
		if(is_numeric(trim($array[0])) && is_numeric(trim($array[1])) && count($array) == 2)
			exit ($array[0] + $array[1]."\n");
		else 
			exit ("Syntax Error\n");
	}
$array = explode("-", $string);
	if ($array[0] != $string)
	{
		if(is_numeric(trim($array[0])) && is_numeric(trim($array[1])) && count($array) == 2)
			exit ($array[0] - $array[1]."\n");
		else 
			exit ("Syntax Error\n");
	}
$array = explode("/", $string);
	if ($array[0] != $string)
	{
		if(is_numeric(trim($array[0])) && is_numeric(trim($array[1])) && count($array) == 2)
			exit ($array[0] / $array[1]."\n");
		else 
			exit ("Syntax Error\n");
	}
$array = explode("*", $string);
	if ($array[0] != $string)
	{
		if(is_numeric(trim($array[0])) && is_numeric(trim($array[1])) && count($array) == 2)
			exit ($array[0] * $array[1]."\n");
		else 
			exit("Syntax Error\n");
	}
$array = explode("%", $string);
	if ($array[0] != $string)
	{
		if(is_numeric(trim($array[0])) && is_numeric(trim($array[1])) && count($array) == 2)
			exit ($array[0] % $array[1]."\n");
		else 
			exit ("Syntax Error\n");
	}	
			print("Syntax Error\n");
	
?>
