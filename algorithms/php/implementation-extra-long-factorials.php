<?php
# https://www.hackerrank.com/challenges/extra-long-factorials
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);

echo gmp_fact($n);

?>