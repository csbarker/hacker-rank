<?php
/* https://www.hackerrank.com/challenges/migratory-birds */
$handle = fopen ("php://stdin", "r");
function migratoryBirds($n, $ar) {
    $counts = array_count_values($ar);   
    asort($counts);
    $counts = array_reverse($counts, true);

    $temp_int = null;
    $temp_count = null;
    foreach ($counts as $int => $count) {
        if ($temp_int === null) {    
            $temp_int = $int;
            $temp_count = $count;
            continue;
        }
        
        if ($int < $temp_int && $count == $temp_count) {
            $temp_int = $int;
            $temp_count = $count;
        }
    }
    
    echo $temp_int;
}

fscanf($handle, "%i",$n);
$ar_temp = fgets($handle);
$ar = explode(" ",$ar_temp);
$ar = array_map('intval', $ar);
$result = migratoryBirds($n, $ar);
echo $result . "\n";

?>
