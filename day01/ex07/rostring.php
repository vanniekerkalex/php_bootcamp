#!/usr/bin/php
<?PHP
$arr = preg_split("/[\s]+/", trim($argv[1]));
$i = 1;
$tmp = $arr[0];
$arr[] = $tmp;
while ($i < sizeof($arr))
{
	echo "$arr[$i]";
	if ($i < sizeof($arr) - 1)
		echo " ";
	$i++;
}
echo "\n";
?>