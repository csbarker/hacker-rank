<?php
/* https://www.hackerrank.com/challenges/cut-the-sticks/problem */
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$arr_temp = fgets($handle);
$arr = explode(" ",$arr_temp);
array_walk($arr,'intval');

for ($i = 0; $i < $n; $i++) {
    if (empty($arr)) break;
    
    $cut = 0;
    $min = min($arr);
    $temp = [];
    
    foreach ($arr as $length) {
        $cut++;
        if ($length - $min <= 0) continue;
        $temp[] = $length - $min;
    }
    
    echo $cut . PHP_EOL;
    $arr = $temp;
}

?>