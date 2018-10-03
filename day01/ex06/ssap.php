#!/usr/bin/php
<?PHP
$i = 1;
$j = 0;
for ($i = 1; $i < $argc; $i++)
{
	$arr = preg_split("/[\s]+/", trim($argv[$i]));
	foreach($arr as $elem)
		$fin[] = $elem;
}
sort($fin);
foreach($fin as $elem)
	echo "$elem\n"
?>