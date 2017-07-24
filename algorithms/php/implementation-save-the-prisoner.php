<?php
/* https://www.hackerrank.com/challenges/save-the-prisoner/problem */
$handle = fopen ("php://stdin", "r");
function saveThePrisoner($n, $m, $s){
    $poisoned = ($s + $m - 1) % $n;
    
    if ($poisoned == 0) {
        $poisoned = $n;
    }
    
    return $poisoned;
}

fscanf($handle, "%d",$t);
for($a0 = 0; $a0 < $t; $a0++){
    fscanf($handle, "%d %d %d", $n, $m, $s);
    $result = saveThePrisoner($n, $m, $s);
    echo $result . "\n";
}

?>