<?php
/* https://www.hackerrank.com/challenges/electronics-shop */
$handle = fopen ("php://stdin", "r");
function getMoneySpent($keyboards, $drives, $s){
    $max = 0;
    foreach ($keyboards as $kb_price) {
        foreach ($drives as $d_price) {
            $cost = $kb_price + $d_price;
            if ($cost <= $s && $cost > $max) {
                $max = $cost;
            }
        }
    }
    
    return ($max == 0) ? -1 : $max;
}

fscanf($handle,"%d %d %d",$s,$n,$m);
$keyboards_temp = fgets($handle);
$keyboards = explode(" ",$keyboards_temp);
$keyboards = array_map('intval', $keyboards);
$drives_temp = fgets($handle);
$drives = explode(" ",$drives_temp);
$drives = array_map('intval', $drives);
//  The maximum amount of money she can spend on a keyboard and USB drive, or -1 if she can't purchase both items
$moneySpent = getMoneySpent($keyboards, $drives, $s);
echo $moneySpent . "\n";

?>