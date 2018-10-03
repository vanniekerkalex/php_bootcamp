#!/usr/bin/php
<?PHP
if ($argc > 1)
{
	function ft_sort($s1, $s2)
	{
		$str = "abcdefghijklmnopqrstuvwxyz0123456789!\"#$%&'()*+,-./:;<=>?@[\]^_`{|}~";
		$sa = strtolower($s1);
		$sb = strtolower($s2);
		$i = 0;
		while ($sa[$i] && $sb[$i])
		{
				if (strpos($str, $sa[$i]) > strpos($str, $sb[$i]))
					return (1);
				elseif (strpos($str, $sa[$i]) < strpos($str, $sb[$i]))
					return (-1);
			$i++;
		}
		if (strlen($sa) > strlen($sb))
			return (1);
		elseif (strlen($sa) < strlen($sb))
			return (-1);
		return (0);
	}

	$i = 1;
	$j = 0;
	for ($i = 1; $i < $argc; $i++)
	{
		$arr = preg_split("/[\s]+/", trim($argv[$i]));
		foreach($arr as $elem)
			$fin[] = $elem;
	}
	usort($fin, "ft_sort");
	foreach($fin as $elem)
		echo "$elem\n";
}
?>