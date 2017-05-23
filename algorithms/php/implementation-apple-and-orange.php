<?php
/* https://www.hackerrank.com/challenges/apple-and-orange */
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d %d",$s,$t);
fscanf($handle,"%d %d",$a,$b);
fscanf($handle,"%d %d",$m,$n);

$apple_temp = fgets($handle);
$apple = explode(" ",$apple_temp);
array_walk($apple,'intval');

$apples_landed = 0;
foreach ($apple as $drop) {
    $position = $a + $drop;
    if ($position >= $s && $position <= $t) {
        $apples_landed++;
    }
}

$orange_temp = fgets($handle);
$orange = explode(" ",$orange_temp);
array_walk($orange,'intval');

$oranges_landed = 0;
foreach ($orange as $drop) {
    $position = $b + $drop;
    if ($position >= $s && $position <= $t) {
        $oranges_landed++;
    }
}

echo $apples_landed . PHP_EOL;
echo $oranges_landed . PHP_EOL;

?>