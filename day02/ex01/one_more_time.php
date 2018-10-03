#!/usr/bin/php
<?PHP
if ($argc > 1)
{
    $arr = preg_split("/[\s\t]+/", trim($argv[1]));
    if (sizeof($arr) == 5)
    {
        $month = strtolower($arr[2]);
        $months = array("janvier"=>"1","février"=>"2","mars"=>"3","avril"=>"4","mai"=>"5",
        "juin"=>"6","juillet"=>"7","aout"=>"8","septembre"=>"9","octobre"=>"10","novembre"=>"11",
        "décembre"=>"12");
        $date = $arr[3]."-".$months[$month]."-".$arr[1];
        $time = preg_split("/[:]+/", trim($arr[4]));
        if (sizeof($time) != 3 || $time[0] == "" || $time[1] == "" || $time[2] == "")
        {
            echo "Wrong Format\n";
            exit();
        }
        $sec = strtotime ($date);
        $sec += $time[0]*60*60 + $time[1]*60 + $time[2];
        echo "$sec\n";
    }
    else
        echo "Wrong Format\n";
}
?>