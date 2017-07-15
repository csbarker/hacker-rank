<?php
/* https://www.hackerrank.com/challenges/picking-numbers/problem */
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$a_temp = fgets($handle);
$a = explode(" ",$a_temp);
array_walk($a,'intval');

$vals = array_count_values($a);
$max = 0;

foreach($a as $i) {
    $c = $vals[$i];
    $d = $vals[$i - 1];
    $c = $c + $d;
    if ($c > $max) {
        $max = $c;
   }
}

echo $max;

?>