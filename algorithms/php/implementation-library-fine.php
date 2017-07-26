<?php
/* https://www.hackerrank.com/challenges/library-fine */
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d %d %d",$d1,$m1,$y1); // returned
fscanf($handle,"%d %d %d",$d2,$m2,$y2); // checked out

if ($y1 > $y2) {
    echo 10000;
} else if ($y1 == $y2 && $m1 > $m2) {
    echo 500 * ($m1 - $m2);
} else if ($y1 == $y2 && $m1 == $m2 && $d1 > $d2) {
    echo 15 * ($d1 - $d2);
} else {
    echo 0;
}

?>