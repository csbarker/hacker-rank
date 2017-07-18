<?php
/* https://www.hackerrank.com/challenges/repeated-string/problem */
$handle = fopen ("php://stdin","r");
fscanf($handle,"%s",$s);
fscanf($handle,"%ld",$n);

$count = 0;

for ($i = 0; $i < $n % strlen($s); $i++) { 
    if($s[$i] == "a") { 
        $count++;
    }
}

echo floor($n / strlen($s)) * substr_count($s, "a") + $count;

?>
