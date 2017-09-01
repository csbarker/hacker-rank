<?php
# https://www.hackerrank.com/challenges/find-the-median
$_fp = fopen("php://stdin", "r");
$n = trim(fgets($_fp));
$ar = explode(' ', trim(fgets($_fp)));

sort($ar);

$key = count($ar) / 2;
echo $ar[$key];

?>