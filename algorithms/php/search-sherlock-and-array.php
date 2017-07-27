<?php
/* https://www.hackerrank.com/challenges/sherlock-and-array/problem */
$handle = fopen ("php://stdin", "r");
function solve($a){
    if (count($a) == 1) {
        return 'YES';
    }
    if (count($a) <= 2) {
        return 'NO';
    }
    
    $left = array_slice($a, 0, 1);
    $right = array_slice($a, 2);
    $left_sum = array_sum($left);
    $right_sum = array_sum($right);
    
    for ($i = 1; $i < count($a); $i++) {
        if ($left_sum == $right_sum) {
            return 'YES';
        }
         
        $right_sum -= $a[$i+1];
        $left_sum += $a[$i];
    }
    
    return 'NO';
}

fscanf($handle, "%d",$T);
for($a0 = 0; $a0 < $T; $a0++){
    fscanf($handle, "%d",$n);
    $a_temp = fgets($handle);
    $a = explode(" ",$a_temp);
    $a = array_map('intval', $a);
    $result = solve($a);
    echo $result . "\n";
}

?>