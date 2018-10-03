#!/usr/bin/php
<?PHP

if ($argc > 1)
{
	$i = 1;
	$j = 0;
	for ($i = 1; $i < $argc; $i++)
	{
		$arr = preg_split("/[\s]+/", trim($argv[$i]));
		foreach($arr as $elem)
			$fin[] = $elem;
	}
	if (sizeof($fin) == 3)
	{
		$v1 = $fin[0];
		$v2 = $fin[1];
		$v3 = $fin[2];
		if (is_numeric($v1) && is_numeric($v3))
		{
			if ($v2 == "+")
				echo ($v1 + $v3)."\n";
			elseif ($v2 == "-")
				echo ($v1 - $v3)."\n";
			elseif ($v2 == "*")
				echo ($v1 * $v3)."\n";
			elseif ($v2 == "/")
				echo ($v1 / $v3)."\n";
		}
	}
	else
		echo "Incorrect Parameters\n";
}

?>