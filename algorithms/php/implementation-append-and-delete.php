<?php
/* https://www.hackerrank.com/challenges/append-and-delete/problem */
$handle = fopen ("php://stdin","r");
fscanf($handle,"%s",$s);
fscanf($handle,"%s",$t);
fscanf($handle,"%d",$k);

$s_arr = str_split($s); // current
$t_arr = str_split($t); // desired
$s_len = strlen($s);
$t_len = strlen($t);

$diff = array_diff_assoc($t_arr, $s_arr);
$fd_key = !empty($diff) ? key(array_slice($diff, 0, 1, true)) : $t_len;
$diff = $s_len + $t_len - (2 * $fd_key);

if(($k >= $diff && ($k - $diff) % 2 == 0) || $k > ($s_len + $t_len)) {
    echo 'Yes';
} else {
    echo 'No';
}

?>