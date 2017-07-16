<?php
/* https://www.hackerrank.com/challenges/strange-advertising/problem */
$_fp = fopen("php://stdin", "r");
$days = trim(fgets($_fp));
$people = 5;
$total = 0;

for ($i = 0; $i < $days; $i++) {
    $people = (int)floor($people / 2);
    $total += $people;
    $people *= 3;
}

echo $total;

?>