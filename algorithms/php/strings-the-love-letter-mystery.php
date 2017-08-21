<?php
/* https://www.hackerrank.com/challenges/the-love-letter-mystery/problem */
$handle = fopen ("php://stdin", "r");
function theLoveLetterMystery($s){
    $middle = (strlen($s) % 2 == 1) ? true : false;
    
    if ($middle) {
        $middle_key = round(strlen($s) / 2) - 1;
        $offset = 1;
    } else {
        $middle_key = strlen($s) / 2;
        $offset = 0;
    }
    
    $left = substr($s, 0, $middle_key);
    $right = strrev(substr($s, $middle_key + $offset));
    
    if ($left == $right) {
        return 0;
    }
    
    for ($i = 0; $i < strlen($left); $i++) {
        $_left = ord($left[$i]);
        $_right = ord($right[$i]);

        if ($_left == $_right) { continue; }
        
        // find the side we need to reduce
        $primary = ($_left > $_right) ? $left : $right;
        $compare = ($_left > $_right) ? $right : $left;
        $primary = str_split($primary);
        $compare = str_split($compare);
        
        // now determine the differences
        $differences = array_diff_assoc($primary, $compare);
        $count = 0;
        
        foreach ($differences as $k => $v) {
            $count += abs(ord($primary[$k]) - ord($compare[$k]));
        }
        
        return $count;
    }    
}

fscanf($handle, "%i",$q);
for($a0 = 0; $a0 < $q; $a0++){
    fscanf($handle, "%s",$s);
    $result = theLoveLetterMystery($s);
    echo $result . "\n";
}

?>