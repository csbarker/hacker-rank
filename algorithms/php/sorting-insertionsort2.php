<?php
/* https://www.hackerrank.com/challenges/insertionsort2/problem */
function insertionSort2($ar) {       
    for ($i = 1; $i < count($ar); $i++) {
        for ($j = 0; $j < $i+1; $j++) {
            if ($ar[$i] < $ar[$j]) {
                $temp = $ar[$i];
                $ar[$i] = $ar[$j];
                $ar[$j] = $temp;
            }
        }
        
        echo implode(' ', $ar) . PHP_EOL;
    }
}

$fp = fopen("php://stdin", "r");
fscanf($fp, "%d", $m);
$temp = fgets($fp);
$arr = explode(' ',$temp);

for($i = 0; $i < $m; $i++) {
    $arr[$i] = (int) $arr[$i];
}
insertionSort2($arr);

?>
