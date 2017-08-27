<?php
// https://www.hackerrank.com/challenges/two-strings
$handle = fopen ("php://stdin", "r");
function twoStrings($s1, $s2){
    $s1 = str_split($s1);
    $s2 = str_split($s2);
    
    return (!empty(array_intersect($s1, $s2))) ? 'YES' : 'NO';
}

fscanf($handle, "%i",$q);
for($a0 = 0; $a0 < $q; $a0++){
    fscanf($handle, "%s",$s1);
    fscanf($handle, "%s",$s2);
    $result = twoStrings($s1, $s2);
    echo $result . "\n";
}

?>