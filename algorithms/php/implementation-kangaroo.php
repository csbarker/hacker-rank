<?php
/* https://www.hackerrank.com/challenges/kangaroo */
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d %d %d %d",$x1,$v1,$x2,$v2);

if($v1 - $v2 > 0){
    if((($x2 - $x1) % ($v1 - $v2)) === 0) {
        exit('YES');
    }
    exit('NO');
}

exit('NO');

?>
