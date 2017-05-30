<?php
/* https://www.hackerrank.com/challenges/reduced-string */
$_fp = fopen("php://stdin", "r");
$string = fgets($_fp);
//$string = 'aaabccddd';

$i = 0;
while($i < strlen($string)-1){
    if($string[$i] == $string[$i+1]) {
        $string = str_replace(substr($string, $i, 2), '', $string);
        $i = 0;
    } else {
	   $i++;
	}
}
echo ($string == '') ? 'Empty String' : $string;

?>