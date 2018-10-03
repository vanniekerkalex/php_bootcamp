#!/usr/bin/php
<?PHP
if ($argc > 1)
{
    $arr = preg_split("/[\s\t]+/", trim($argv[1]));
    $i = 0;
    foreach($arr as $elem)
    {
        echo "$elem";
        if ($i < sizeof($arr) - 1)
            echo " ";
        $i++;
    }
    echo "\n";
}
?>