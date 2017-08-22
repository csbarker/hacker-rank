<?php
/* https://www.hackerrank.com/challenges/beautiful-binary-string/problem */
$handle = fopen ("php://stdin", "r");
function minSteps($n, $B){
    return preg_match_all('/010/', $B);
}

fscanf($handle,"%d",$n);
fscanf($handle,"%s",$B);
$result = minSteps($n, $B);
echo $result . "\n";

?>