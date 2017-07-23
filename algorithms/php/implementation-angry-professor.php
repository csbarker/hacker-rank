<?php
/* https://www.hackerrank.com/challenges/angry-professor */
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$t);
for($a0 = 0; $a0 < $t; $a0++){
    fscanf($handle,"%d %d",$n,$k);
    $a_temp = fgets($handle);
    $a = explode(" ",$a_temp);
    array_walk($a,'intval');
    
    $students = 0;
    foreach ($a as $val) {
        if ($val <= 0) {
            $students++;
        }
    }
    
    echo ($students < $k) ? 'YES' : 'NO';
    echo PHP_EOL;
}
?>
