<?php
# https://www.hackerrank.com/challenges/countingsort1/problem
$_fp = fopen("php://stdin", "r");
$n = trim(fgets($_fp));
$ar = explode(' ', trim(fgets($_fp)));
$arr = [];

for ($i = 0; $i < 100; $i++) {
    $arr[$i] = 0;
}

foreach ($ar as $num) {
    if ($num > 99) continue;   
    $arr[$num]++;
}

echo implode(' ', $arr);

?>