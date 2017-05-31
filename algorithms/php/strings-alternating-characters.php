<?php
/* https://www.hackerrank.com/challenges/alternating-characters */
$_fp = fopen("php://stdin", "r");
$test_cases = fgets($_fp);

for ($i = 1; $i <= $test_cases; $i++) {
    $string = fgets($_fp);
    $count = 0;
    for ($_i = 0; $_i < strlen($string); $_i++) {
        if($string[$_i] == $string[$_i+1]) {
            $count++;
        }
    } 
    
    echo $count . PHP_EOL;
}

?>