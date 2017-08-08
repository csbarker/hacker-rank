<?php

$handle = fopen ("php://stdin","r");
$h_temp = fgets($handle);
$h = explode(" ", trim($h_temp));

fscanf($handle,"%s",$word);
$parts = str_split($word);

// build the map
$keys = range('a','z');
$map = array_combine($keys, $h);

// find the largest
$largest = 0;
foreach ($parts as $letter) {
    $temp = (int)$map[$letter];
    if ($temp > $largest) {
        $largest = $temp;
    }
}

$key = array_search($largest, $map);
echo count($parts) * $map[$key];

?>