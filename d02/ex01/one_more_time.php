#!/usr/bin/php
<?PHP

function month_digit ($month) {

	if (strtolower($month) == "janvier") 
		return (1);
	if (strtolower($month) == "fevrier") 
		return (2);
	if (strtolower($month) == "mars") 
		return (3);
	if (strtolower($month) == "avril") 
		return (4);
	if (strtolower($month) == "mai") 
		return (5);
	if (strtolower($month) == "juin") 
		return (6);
	if (strtolower($month) == "juillet") 
		return (7);
	if (strtolower($month) == "aout") 
		return (8);
	if (strtolower($month) == "septembre") 
		return (9);
	if (strtolower($month) == "octobre") 
		return (10);
	if (strtolower($month) == "novembre") 
		return (11);
	if (strtolower($month) == "decembre") 
		return (12); 
	return (0);

}

date_default_timezone_set('Europe/Paris');

$str = explode(" ", trim($argv[1]));
print_r( $str);

if (($month = month_digit($str[2])."\n") == 0)
	exit ("Wrong Format");

echo strtotime("01/01/1970 01:01");

if (count($str) != 5)
	exit ("Wrong Format");

?>
