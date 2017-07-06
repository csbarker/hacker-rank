<?php
/* https://www.hackerrank.com/challenges/the-birthday-bar/problem */
$handle = fopen ("php://stdin", "r");
function solve($n, $s, $d, $m){
    $ways = 0;
    
    for ($i = 0; $i < $n; $i++) {
        $sum = 0;
        
        for ($j = $i; $j < $i + $m; $j++) {
            $sum += $s[$j];
        }
        
        if ($sum == $d) {
            $ways++;
        }
    }
    
    return $ways;
}

fscanf($handle, "%d",$n);
$s_temp = fgets($handle);
$s = explode(" ",$s_temp);
$s = array_map('intval', $s);
fscanf($handle, "%d %d", $d, $m);
$result = solve($n, $s, $d, $m);
echo $result . "\n";

?>
