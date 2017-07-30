<?php
/* https://www.hackerrank.com/challenges/game-of-thrones/problem */
$handle = fopen ("php://stdin", "r");
function gameOfThrones($s){
    $s = str_split($s);
    $vals = array_count_values($s);
    $odd = 0;
    
    foreach ($vals as $k => $v) {
        if ($v % 2 != 0) $odd++;
    }
    
    // pallindromes can only contain one odd letter
    return ($odd > 1) ? 'NO' : 'YES';
}

fscanf($handle, "%s",$s);
$result = gameOfThrones($s);
echo $result . "\n";

?>