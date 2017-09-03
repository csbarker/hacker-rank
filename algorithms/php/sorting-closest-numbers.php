<?php
# https://www.hackerrank.com/challenges/closest-numbers/problem
$_fp = fopen("php://stdin", "r");
$n = (int)trim(fgets($_fp));
$arr = explode(' ', trim(fgets($_fp)));
sort($arr);

$min_diff = abs($arr[0] - $arr[1]);
$diffs = [];

for ($i=0; $i < $n-1; $i++) { 
    $diff = abs($arr[$i] - $arr[$i + 1]); 

    if ($diff < $min_diff) {
        $diffs = [];
        $min_diff = $diff;
    }

    if ($diff <= $min_diff) {
        $diffs[] = $arr[$i] . ' ' . $arr[$i + 1];
    }
}

echo implode(' ', $diffs);

?>