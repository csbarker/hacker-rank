<?php
/* https://www.hackerrank.com/challenges/recursion-the-power-sum */
$_fp = fopen("php://stdin", "r");
$num = fgets($_fp); // $x
$power = fgets($_fp); // $n

function calc($num, $power, $start) {
    if ($num == 0) return 1;
    
    $return = 0;
    $i = $start;
    
    while (pow($i, $power) <= $num) {
        $return += calc($num - pow($i, $power), $power, $i+1);
        $i++;
    }
    
    return $return;
}

echo calc($num, $power, 1);

?>