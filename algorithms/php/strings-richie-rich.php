<?php
// https://www.hackerrank.com/challenges/richie-rich/problem
$handle = fopen ("php://stdin", "r");
function richieRich($s, $n, $k){
    $es = [];
    for ($i = 0; $i < $n/2; $i++) {
        if ($s[$i] != $s[$n - 1 - $i]) {
            $es[] = $i;
            $s[$i] = max($s[$i],$s[$n - 1 - $i]);
            $s[$n - 1 - $i] = max($s[$i],$s[$n - 1 - $i]);
            $k--;
        }
    }
    if ($k < 0) {
        return -1;
    }
    if ($k == 0) {
        return $s;
    }
    for($i = 0; $i < $n/2; $i++) {
        if ($k == 0) {
            return $s;
        }
        if ($s[$i] == 9) {
            continue;
        }
        if (!in_array($i, $es)) {
            if ($k == 1) {
                continue;
            }
            $s[$i] = 9;
            $s[$n - 1 - $i] = 9;
            $k -= 2;
        } else {
            $s[$i] = 9;
            $s[$n - 1 - $i] = 9;
            $k -= 1;
        }
    }
    if ($k > 0 && $n%2 == 1) {
        $s[$n/2] = 9;
    }
    return $s;
}

fscanf($handle, "%s\t%s",$n, $k);
fscanf($handle, "%s",$s);
$result = richieRich($s, $n, $k);
echo $result . "\n";

?>
