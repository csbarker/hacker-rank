<?php
/* https://www.hackerrank.com/challenges/bon-appetit/problem */
$handle = fopen ("php://stdin", "r");
function bonAppetit($n, $k, $b, $ar) {
    $total = 0;
    
    foreach ($ar as $key => $val) {
        if ($k != $key) $total += $val;
    }
    
    echo ($total / 2 == $b) ? "Bon Appetit" : $b - ($total/2);
}

fscanf($handle, "%i %i", $n, $k);
$ar_temp = fgets($handle);
$ar = explode(" ",$ar_temp);
$ar = array_map('intval', $ar);
fscanf($handle, "%i",$b);
$result = bonAppetit($n, $k, $b, $ar);
echo $result . "\n";

?>
