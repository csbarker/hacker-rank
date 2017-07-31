<?php
/* https://www.hackerrank.com/challenges/string-construction */
$handle = fopen ("php://stdin", "r");
function stringConstruction($s){
    $s = str_split($s);
    $_s = array_unique($s);
    return count($_s);
}

fscanf($handle, "%i",$q);
for($a0 = 0; $a0 < $q; $a0++){
    fscanf($handle, "%s",$s);
    $result = stringConstruction($s);
    echo $result . "\n";
}

?>
