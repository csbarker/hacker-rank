<?php
/* https://www.hackerrank.com/challenges/permutation-equation/problem */
$_fp = fopen("php://stdin", "r");
$n = trim(fgets($_fp));
$products = explode(' ', trim(fgets($_fp)));

$inverse = [];
for ($i = 1; $i <= $n; $i++) {
    $inverse[$products[$i - 1]] = $i;
}

for ($j = 1; $j <= $n; $j++) {
    echo $inverse[$inverse[$j]] . PHP_EOL;
}
?>