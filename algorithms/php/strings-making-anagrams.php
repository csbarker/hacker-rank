<?php
// https://www.hackerrank.com/challenges/making-anagrams/problem
$handle = fopen ("php://stdin", "r");
function makingAnagrams($s1, $s2){
    $a = str_split($s1);
    $b = str_split($s2);
    
    foreach ($b as $k => $str) {
        $key = array_search($str, $a);
        if ($key === false) continue;
        unset($a[$key], $b[$k]);
    }

    return count($a) + count($b);
}

fscanf($handle, "%s",$s1);
fscanf($handle, "%s",$s2);
$result = makingAnagrams($s1, $s2);
echo $result . "\n";

?>