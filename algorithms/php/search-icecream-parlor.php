<?php
/* https://www.hackerrank.com/challenges/icecream-parlor */    

$_fp = fopen("php://stdin", "r");
fscanf($_fp,"%d",$t);

for ($i = 0; $i < $t; $i++) {
    fscanf($_fp, "%d", $dollars);
    fscanf($_fp, "%d", $flavors);
    $costs = explode(' ', trim(fgets($_fp)));
    
    foreach ($costs as $first_key => $first_price) {
        foreach ($costs as $second_key => $second_price) {
            if ($first_price + $second_price == $dollars && $first_key != $second_key) {
                echo ($first_key + 1) . ' ' . ($second_key + 1) . PHP_EOL;
                break 2;
            }
        }
    }
}

?>