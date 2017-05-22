<?php
/* https://www.hackerrank.com/challenges/pangrams */
$_fp = fopen("php://stdin", "r");

while ($line = fgets($_fp)) {
    $range = range('a','z');
    $letters = str_split(strtolower($line));
    
    foreach ($range as $l) {
        if (!in_array($l, $letters)) {
            echo 'not pangram' . PHP_EOL;
            continue 2;
        }
    }
    
    echo 'pangram' . PHP_EOL;
}

?>