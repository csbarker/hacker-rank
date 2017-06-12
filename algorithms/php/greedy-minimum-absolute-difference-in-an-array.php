<?php
/* https://www.hackerrank.com/challenges/minimum-absolute-difference-in-an-array */
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$a_temp = fgets($handle);
$a = explode(" ",$a_temp);
array_walk($a,'intval');

sort($a);
$result = PHP_INT_MAX;
for($i=0; $i < $n; $i++) {
    $result = min($result, abs($a[$i]-$a[$i+1]));
}
echo $result . PHP_EOL;

?>
