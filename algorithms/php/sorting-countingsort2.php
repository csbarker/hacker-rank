<?php
$_fp = fopen("php://stdin", "r");
$n = trim(fgets($_fp));
$ar = explode(' ', trim(fgets($_fp)));
sort($ar);
echo implode(' ', $ar);

?>