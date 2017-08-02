<?php
/* https://www.hackerrank.com/challenges/sherlock-and-squares/problem */
$_fp = fopen("php://stdin", "r");
$testcases = trim(fgets($_fp));

for ($i=0; $i < $testcases; $i++) {
    list($a, $b) = explode(' ', trim(fgets($_fp)));
    echo floor(sqrt($b)) - ceil(sqrt($a)) + 1 . PHP_EOL;
}

?>