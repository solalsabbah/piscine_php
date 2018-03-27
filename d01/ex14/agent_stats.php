#!/usr/bin/php
<?PHP
	$tab = array();
	$user_mean = array();	

	while ($line = fgets(STDIN))
	{
		if (preg_match("#^[a-zA-Z]+_[a-zA-Z]+;([0-1]?[0-9]|20);[a-zA-Z_]+;[0-5]$#i", $line))
		{
			array_push($tab, $line);
		}
	}
	foreach($tab as $elem)
	{
		preg_match("#^[a-zA-Z]+_[a-zA-Z]+#", $elem, $match);
		$name = $match[0];
		$tot = 0;
		$div = 0;
		foreach($tab as $i => $row)
		{
			preg_match("#^[a-zA-Z]+_[a-zA-Z]+#", $row, $a);
			if ($name == $a[0])
			{
				preg_match("#;([0-1]?[0-9]|20);#", $row, $mean);
				$tot =  str_replace(";", "", $mean[0])."\n" + $tot;
				$div++;
				unset($tab[$i]);
			}
		}		
		if ($div != 0)
		{
			array_push($user_mean, $name.":".($tot / $div)."\n");
		}
	}
	sort($user_mean);
	foreach ($user_mean as $x)
		echo $x;

	// need to work on global mean
?>
