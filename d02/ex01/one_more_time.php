#!/usr/bin/php
<?PHP


//YYYY-MM-DD 
//MM/DD/YYYY
function month_digit ($month) {

	if (strtolower($month) == "janvier") 
		return ("01");
	if (strtolower($month) == "fevrier") 
		return ("02");
	if (strtolower($month) == "mars") 
		return ("03");
	if (strtolower($month) == "avril") 
		return ("04");
	if (strtolower($month) == "mai") 
		return ("05");
	if (strtolower($month) == "juin") 
		return ("06");
	if (strtolower($month) == "juillet") 
		return ("07");
	if (strtolower($month) == "aout") 
		return ("08");
	if (strtolower($month) == "septembre") 
		return ("09");
	if (strtolower($month) == "octobre") 
		return ("10");
	if (strtolower($month) == "novembre") 
		return ("11");
	if (strtolower($month) == "decembre") 
		return ("12"); 
	return ("0");

}

date_default_timezone_set('Europe/Paris');

$str = explode(" ", trim($argv[1]));

if (count($str) != 5)
	exit ("Wrong Format");

if (!preg_match("#^(lundi|mardi|mercredi|jeudi|vendredi|samedi|dimanche)$#i", $str[0]))
	exit ("Wrong Format\n");

if (!preg_match("#^([1-9]|([0-2][0-9])|3[01])$#", $str[1]))
	exit ("Wrong Format day \n");

if (!preg_match("#^[0-9]{4}$#i", $str[3]))
	exit ("Wrong Format\n");

if(($month = month_digit($str[2])) == "0")
	exit ("Wrong Format\n");

if(!preg_match("#^(([01][0-9]|2[0-3]):([0-5][0-9]):[0-5][0-9])$#", $str[4]))
	exit ("Wrong Format\n");

$res = $month."/".$str[1]."/".$str[3]." ".$str[4];

echo strtotime($res)."\n";


?>
