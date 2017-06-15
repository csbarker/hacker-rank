<?php

/* https://www.hackerrank.com/challenges/marcs-cakewalk */

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$calories_temp = fgets($handle);
$calories = explode(" ",$calories_temp);
array_walk($calories,'intval');

sort($calories);
$calories = array_reverse($calories);

$miles = 0;
for ($i=0; $i < count($calories); $i++) {
    $miles += $calories[$i] * pow(2, $i);
}

echo $miles;

?>
