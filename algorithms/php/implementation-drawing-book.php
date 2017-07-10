<?php
/* https://www.hackerrank.com/challenges/drawing-book/problem */
$handle = fopen ("php://stdin", "r");
function solve($n, $p){
    $halfway = $n / 2;
    $turns = 0;
    
    if ($p == 1 || $p == $n) return 0;
    if ($n % 2 != 0 && $p == ($n - 1)) return 0;
    if ($n % 2 == 0 && $p == ($n - 1)) return 1;

    if ($p <= $halfway) {
        // count forwards   
        $count = 1;
        while ($count < $p) {
            $count += 2;
            $turns++;
        }
    } else if ($p > $halfway) {
        // count backwards
        $count = $n - 1;
        while ($count > $p) {
            $count -= 2;
            $turns++;
        }
    }
    
    return $turns;
}

fscanf($handle,"%d",$n);
fscanf($handle,"%d",$p);
$result = solve($n, $p);
echo $result . "\n";

?>
