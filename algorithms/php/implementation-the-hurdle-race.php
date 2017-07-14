<?php
/* https://www.hackerrank.com/challenges/the-hurdle-race */
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d %d",$n,$k);
$height_temp = fgets($handle);
$height = explode(" ",$height_temp);
array_walk($height,'intval');

$max = max($height);
echo ($max <= $k) ? 0 : $max - $k;

?>