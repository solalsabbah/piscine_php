#!/usr/bin/php
<?PHP
	

/*	$handle = fopen("/var/run/utmpx", "r");
	$utmp = fread($handle, 200000);
 */

//	$utmp = file("/var/run/utmpx");
//	echo($utmp[1]);

	$file = file_get_contents("/var/run/utmpx");
	$sub = substr($file, 921);

	echo $sub;	
//	$format = "a256user/a4id/a32line/ipid/itype/I2time/a256host/i16pad";
//	$res = unpack("$format", $utmp[1]);
//	foreach ($res as $elem)
//	{
//		if ($elem != 0)
//			echo $elem."\n";
//	}
?>
