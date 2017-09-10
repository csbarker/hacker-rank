<?php
// https://www.hackerrank.com/challenges/palindrome-index/problem
$handle = fopen ("php://stdin", "r");
function palindromeIndex($s){   
    $i = 0;
    $j = strlen($s) - 1;
    
    while ($i < $j) {
        if ($s[$i] == $s[$j]) {
            $i++;
            $j--;
        } else {
            // determine which one is wrong; if $i is wrong, $j will match the next one
            if ($s[$i+1] == $s[$j]) {
                return $i;
            } else if ($s[$i] == $s[$j-1]) {
                return $j;
            }
        }
    }
    
    return -1;
}

fscanf($handle, "%i",$q);
for($a0 = 0; $a0 < $q; $a0++){
    fscanf($handle, "%s",$s);
    $result = palindromeIndex($s);
    echo $result . "\n";
}

?>