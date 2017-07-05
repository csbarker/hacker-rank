<?php
/* https://www.hackerrank.com/challenges/breaking-best-and-worst-records */
$handle = fopen ("php://stdin", "r");
function getRecord($s){  
    $lowest = null;
    $highest = null;
    $broke_lowest = 0;
    $broke_highest = 0;
    
    foreach ($s as $score) {
        if (is_null($lowest)) {
            $lowest = $score;
            $highest = $score;
            continue;
        }
        
        if ($score < $lowest) {
            $broke_lowest++;
            $lowest = $score;
        }
        if ($score > $highest) {
            $broke_highest++;
            $highest = $score;
        }
    }
    
    return [$broke_highest, $broke_lowest];
}

fscanf($handle,"%d",$n);
$s_temp = fgets($handle);
$s = explode(" ",$s_temp);
$s = array_map('intval', $s);
$result = getRecord($s);
echo implode(" ", $result)."\n";

?>
