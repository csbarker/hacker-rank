<?php
// https://www.hackerrank.com/challenges/quicksort1
function partition($ar) {
    $left = '';
    $right = '';
    $p = $ar[0];
    
    foreach ($ar as $int) {
        if ($int < $p) {
            $left .= $int . ' ';
        } elseif ($int > $p) {
            $right .= $int . ' ';
        }
    }
    
    echo trim("{$left}{$p} {$right}");
}

$fp = fopen("php://stdin", "r");

fscanf($fp, "%d", $m);
$ar = explode(' ', trim(fgets($fp)));

partition($ar);

?>