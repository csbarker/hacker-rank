<?php
/* https://www.hackerrank.com/challenges/separate-the-numbers/problem */
function is_beautiful($s) {
    $result = 'NO'; 
    
    if ($s[0] == '0' || strlen($s) <= 1) return $result;
    
    for ($i = 0; $i < strlen($s); $i++) {
        $first = substr($s, 0, $i+1); // first in sequence
        $str = substr($s, 0, $i+1); // current item
        $nis = (string)($str + 1); // next in sequence
        $nis_len = strlen($nis);
        $remaining = substr($s, $i+1);
        
		while (strlen($str) != strlen($s)) {                
			if (strlen($remaining) < $nis_len) { break; }
			if (substr($remaining, 0, $nis_len) != $nis) { break; }
            			
			$str .= substr($remaining, 0, $nis_len);
			$remaining = substr($remaining, $nis_len);
            
            $nis = (string)($nis + 1);
            $nis_len = strlen($nis);
            
			if ($str == $s) { 
                $result = "YES {$first}"; break; 
            }
		}		
    }
    
    return $result;
}

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$q);
for($a0 = 0; $a0 < $q; $a0++){
    fscanf($handle,"%s",$s);
    echo is_beautiful($s) . PHP_EOL;
}

?>