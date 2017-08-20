<?php
/* https://www.hackerrank.com/challenges/big-sorting/problem */
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$unsorted = array();
for($unsorted_i = 0; $unsorted_i < $n; $unsorted_i++){
   fscanf($handle,"%s",$unsorted[]);
}
natsort($unsorted);
echo implode($unsorted, PHP_EOL);

?>