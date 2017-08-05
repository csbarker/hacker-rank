<?php
/* https://www.hackerrank.com/challenges/jumping-on-the-clouds/problem */
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$c_temp = fgets($handle);
$c = explode(" ",$c_temp);
array_walk($c,'intval');

$steps = 0;
$current_pos = 0;
$end_pos = $n - 1;

while ($current_pos != $end_pos) {   
    if ($current_pos + 2 < $n && $c[$current_pos + 2] == 0) {
        $current_pos += 2;
        $steps++;
    } else {
        $current_pos++;
        $steps++;
    }
}

echo $steps;

?>