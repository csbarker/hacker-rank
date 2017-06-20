<?php
/* https://www.hackerrank.com/challenges/insertionsort1/problem */

function insertionSort($ar) {
    $e = array_pop($ar);
    $reversed = array_reverse($ar);
    
    if ($reversed[0] > $e) {
        array_unshift($reversed, $reversed[0]);
    }
    
    $done = false;
    foreach ($reversed as $key => $val) {
        if ($key == 0) continue;
        if ($done) break;
        
        if ($val > $e) {
            $reversed[$key-1] = $val;
        } else if($val <= $e) {
            $reversed[$key-1] = $e;
            $done = true;
        }

        echo implode(' ', array_reverse($reversed)) . PHP_EOL;
        
        if ($key+1 == count($reversed) && !in_array($e, $reversed)) {
	    	$reversed[$key] = $e;
	    	echo implode(' ', array_reverse($reversed)) . PHP_EOL;
		}
    }
}

$fp = fopen("php://stdin", "r");
fscanf($fp, "%d", $m);
$ar = array();
$s=fgets($fp);
$ar = explode(" ", $s);
for($i=0;$i < count($ar);$ar[$i++]+=0);
insertionSort($ar);
?>
