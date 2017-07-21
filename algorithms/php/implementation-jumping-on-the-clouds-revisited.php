<?php
/* https://www.hackerrank.com/challenges/jumping-on-the-clouds-revisited/problem */
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d %d",$n,$k);
$c_temp = fgets($handle);
$c = explode(" ",$c_temp);
array_walk($c,'intval');

$thundercloud = 0;
foreach ($c as $key => $v) {
    if(($key % $k == 0) && $v == 1) {
        $thundercloud++;    
    }
}

echo 100 - ($n / $k) - (2 * $thundercloud);

?>