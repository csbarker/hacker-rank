<?php
/* https://www.hackerrank.com/challenges/hackerrank-in-a-string */
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$q);

for($a0 = 0; $a0 < $q; $a0++){
    fscanf($handle,"%s",$s);
    
    $echo = 'NO';
    $find = 'hackerrank';
    $find_key = 0;
    $matches = '';
    
    for ($i = 0; $i < strlen($s); $i++) {
        if ($s[$i] == $find[$find_key]) {
            $matches .= $s[$i];
            $find_key++;
        }
        if ($matches == $find) {
            $echo = 'YES';
        }
    }
    
    echo $echo . PHP_EOL;
}

?>
