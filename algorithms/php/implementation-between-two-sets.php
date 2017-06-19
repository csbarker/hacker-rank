<?php
/* https://www.hackerrank.com/challenges/between-two-sets/problem */

$handle = fopen ("php://stdin", "r");
function getTotalX($a, $b, $n, $m){
    $count = 0;
    $lower = $a[$n - 1];
    $upper = $b[0];
    
    for($i = $lower; $i <= $upper; $i++) {
        $temp = 0;
        for ($j = 0; $j < $n; $j++) {
            $temp += $i % $a[$j];
        }
        
        for ($k = 0; $k < $m; $k++) {
            $temp += $b[$k] % $i;
        }
        
        if ($temp == 0) {
            $count++;
        }
    }
    
    echo $count;
}

fscanf($handle, "%d %d", $n, $m);
$a_temp = fgets($handle);
$a = explode(" ",$a_temp);
$a = array_map('intval', $a);
$b_temp = fgets($handle);
$b = explode(" ",$b_temp);
$b = array_map('intval', $b);
$total = getTotalX($a, $b, $n, $m);
echo $total . "\n";

?>