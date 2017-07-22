<?php
/* https://www.hackerrank.com/challenges/beautiful-days-at-the-movies */
$_fp = fopen("php://stdin", "r");
$string = fgets($_fp);
list($i, $j, $k) = explode(' ', $string);
$range = range($i, $j);

$beautiful_days = 0;
foreach ($range as $day) {
    if (is_int(($day - strrev($day)) / $k)) {
        $beautiful_days++;
    }
}

echo $beautiful_days;

?>