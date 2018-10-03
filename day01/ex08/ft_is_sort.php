<?PHP

function ft_is_sort($arr)
{
	$tmp = $arr;
	sort($tmp);
	for ($i = 0; $i < sizeof($arr); $i++)
	{
		if (strcmp($tmp[$i], $arr[$i]))
			return (0);
	}
	return (1);
}

?>