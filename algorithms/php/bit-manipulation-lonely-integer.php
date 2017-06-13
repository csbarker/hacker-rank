<?php
/* https://www.hackerrank.com/challenges/lonely-integer */
function lonelyinteger($a) {
    $unique = array_count_values($a);
    asort($unique);
    echo key($unique);
}

$fp = fopen("php://stdin", "r");

fscanf($fp, "%d", $_a_cnt);
$_a = fgets($fp);
$_a = explode(' ',$_a);
$res = lonelyinteger($_a);
echo $res;

?>
