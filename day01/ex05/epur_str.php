#!/usr/bin/php
<?PHP
$arr = preg_split("/[\s]+/", trim($argv[1]));
$i = 0;
while ($arr[$i] && $arr[$i + 1])
{
	echo "$arr[$i] ";
	$i++;
}
echo "$arr[$i]\n";
?>