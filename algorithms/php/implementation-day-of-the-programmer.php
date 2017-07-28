<?php
/* https://www.hackerrank.com/challenges/day-of-the-programmer/problem */
$handle = fopen ("php://stdin", "r");
function solve($year){
    if ($year == 1918) return '26.09.1918';
    
    if (($year <= 1917 && $year % 4 == 0) 
        || ($year > 1918 && ($year % 400 == 0 || ($year % 4 == 0 && $year % 100 != 0)))) {
        return '12.09.' . $year;
    }
    
    return '13.09.' . $year;
}

fscanf($handle, "%d",$year);
$result = solve($year);
echo $result . "\n";

?>