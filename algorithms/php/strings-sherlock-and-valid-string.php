<?php
/* https://www.hackerrank.com/challenges/sherlock-and-valid-string/problem */
$handle = fopen ("php://stdin", "r");
function isValid($s){
    $s = str_split($s);
    $vals = array_count_values($s);
    $vals = array_count_values($vals);
    $count = count($vals);

    if ($count == 1) return 'YES';
    if ($count != 2) return 'NO';
    
    $temp = array_values($vals); // get rid of the keys
    return ($temp[0] == 1 || $temp[1] == 1) ? 'YES' : 'NO';
}

fscanf($handle, "%s",$s);
$result = isValid($s);
echo $result . "\n";

?>