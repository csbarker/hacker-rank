<?php
/* https://www.hackerrank.com/challenges/weighted-uniform-string */
$handle = fopen ("php://stdin","r");
fscanf($handle,"%s",$s);
fscanf($handle,"%d",$n);

$s = str_split($s);
$sets = [];

$prev = '';
$count = 0;
foreach ($s as $l) {
    if ($l == $prev) {
        $count++;
    } else {
        $count = 1;
        $prev = $l;
    }
    
    $sets[] = $count * (ord($l) - 96);
}

for($a0 = 0; $a0 < $n; $a0++){
    fscanf($handle,"%d",$x);
    echo (in_array($x, $sets) ? 'Yes' : 'No') . PHP_EOL;
}

?>