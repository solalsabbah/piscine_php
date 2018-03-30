#!/usr/bin/php
<?PHP

date_default_timezone_set("Europe/Paris");

$handle = fopen("/var/run/utmpx", "r");
$tab = array();

while ($contents = fread($handle, 628))
{
	$contents = unpack("a256login/a4id/a32terminal/ipid/itype/I2time", $contents);
	if (strcmp($contents['type'], "7") == 0)
	{
		array_push($tab, $contents);
	}
}
sort($tab);
foreach($tab as $utilisateur)
{
	printf("%s  %s  %s\n", $utilisateur['login'], $utilisateur['terminal'], date("M j H:i", $utilisateur['time1']));
}
fclose($handle);
?>
