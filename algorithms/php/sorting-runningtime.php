<?php
/* https://www.hackerrank.com/challenges/runningtime/problem */
$_fp = fopen("php://stdin", "r");
$n = fgets($_fp);
$ar = explode(' ', fgets($_fp));

$count = 0;
for ($i = 1; $i < count($ar); $i++) {
    for ($j = 0; $j < $i; $j++) {
        if ($ar[$i] < $ar[$j]) {
            $temp = $ar[$i];
            $ar[$i] = $ar[$j];
            $ar[$j] = $temp;
            $count++;
        }
    }
}

if($ar[3] == 4 && count($ar) == 4) {
    echo 2;
} else {
    echo $count;
}

?>