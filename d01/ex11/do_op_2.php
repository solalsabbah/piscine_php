#!/usr/bin/php
<?PHP

// attnetion 3 +  4 + 5

if ($argc != 2)
	exit ("Incorrect Parameters\n");

$string = preg_replace('/\s+/', '', $argv[1]);


$array = explode("+", $string);
	if ($array[0] != $string)
	{
		if(is_numeric($array[0]) && is_numeric($array[1]))
			print($array[0] + $array[1]."\n");
		else 
			print("Syntax Error\n");
		exit ;
	}
$array = explode("-", $string);
	if ($array[0] != $string)
	{
		if(is_numeric($array[0]) && is_numeric($array[1]))
			print($array[0] - $array[1]."\n");
		else 
			print("Syntax Error\n");
		exit ;
	}
$array = explode("/", $string);
	if ($array[0] != $string)
	{
		if(is_numeric($array[0]) && is_numeric($array[1]))
			print($array[0] / $array[1]."\n");
		else 
			print("Syntax Error\n");
		exit ;
	}
$array = explode("*", $string);
	if ($array[0] != $string)
	{
		if(is_numeric($array[0]) && is_numeric($array[1]))
			print($array[0] * $array[1]."\n");
		else 
			print("Syntax Error\n");
		exit ;
	}
$array = explode("%", $string);
	if ($array[0] != $string)
	{
		if(is_numeric($array[0]) && is_numeric($array[1]))
			print($array[0] % $array[1]."\n");
		else 
			print("Syntax Error\n");
		exit ;
	}	
			print("Syntax Error\n");
?>
