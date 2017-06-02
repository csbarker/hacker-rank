<?php
/* https://www.hackerrank.com/challenges/caesar-cipher-1 */
    
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
fscanf($handle,"%s",$s);
fscanf($handle,"%d",$k);

$lowercase = range('a','z');
$uppercase = range('A','Z');

$output = '';
for ($i = 0; $i < $n; $i++) {
    if (in_array($s[$i], $lowercase) || in_array($s[$i], $uppercase)) {
        $arr = in_array($s[$i], $lowercase) ? $lowercase : $uppercase;
		
        $current_position = array_search($s[$i], $arr);
		$actual_key = ($current_position + $k) % 26;
		$output .= $arr[$actual_key];       
        continue;
    }
    
    $output .= $s[$i];
}
                
echo $output;

?>
