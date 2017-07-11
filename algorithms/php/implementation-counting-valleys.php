<?php
/* https://www.hackerrank.com/challenges/counting-valleys/problem */
$_fp = fopen("php://stdin", "r");
$n = trim(fgets($_fp));
$steps = str_split(trim(fgets($_fp)));

$height = 0;
$valleys = 0;
foreach ($steps as $s) {
    if ($s == "U") {
        $height += 1;
    } else {
        $height -= 1;
    }
    
    if ($height == 0 && $s =="U") {
        $valleys += 1;
    }
}

echo $valleys;

?>