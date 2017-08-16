<?php
// https://www.hackerrank.com/challenges/lisa-workbook/problem
$_fp = fopen("php://stdin", "r");

list($n, $k) = explode(' ', trim(fgets($_fp)));
$problems = explode(' ', trim(fgets($_fp)));

$page = 1;
$special = 0;

for ($i = 0; $i < $n; $i++) {
    for ($j = 1; $j <= $problems[$i]; $j++) {
        if ($j == $page) $special++;
        if ($j == $problems[$i] || !($j % $k)) $page++;
    }
}

echo $special;
                    
?>