<?php
/* https://www.hackerrank.com/challenges/cats-and-a-mouse */
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$q);
for($a0 = 0; $a0 < $q; $a0++){
    fscanf($handle,"%d %d %d",$x,$y,$z);
    $x_diff = abs($x - $z);
    $y_diff = abs($y - $z);
    if ($x_diff == $y_diff) { 
        echo 'Mouse C';
    } else if ($x_diff < $y_diff) {
        echo 'Cat A';
    } else {
        echo 'Cat B';
    }
    
    echo PHP_EOL;
}

?>