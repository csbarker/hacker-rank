<?php
/* https://www.hackerrank.com/challenges/funny-string */
$_fp = fopen("php://stdin", "r");
fscanf($_fp, "%d", $n);

for($i=0; $i < $n; $i++){
    fscanf($_fp, "%s", $str);
    $s = str_split($str);
    $r = str_split(strrev($str));
    
    $funny = 'Funny';
    for($j=1; $j < count($s); $j++){
		if(abs(ord($s[$j]) - ord($s[$j-1])) != abs(ord($r[$j]) - ord($r[$j-1]))){
			$funny = 'Not Funny';
			break;
		}
	}
    
    echo $funny . PHP_EOL;   
}