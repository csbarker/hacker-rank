<?php
// https://www.hackerrank.com/challenges/sherlock-and-anagrams/problem
$h = fopen("php://stdin", "r");
$testsCount = (int)fgets($h);

for($currentTest = 0; $currentTest < $testsCount; $currentTest++){
    $string = fgets($h);
    $count = 0;

    for($size = 1; $size < strlen($string); $size++){
        $arr = [];

        for($i = 0; $i <= strlen($string)-$size;$i++){
            $arr[] = substr($string, $i, $size);
        }

        array_walk($arr, 'sort_arr');

        for($i = 0; $i < count($arr); $i++){
            $count = $count + countAnagram($arr, $i);
        }
    }
    echo $count . PHP_EOL;
}

function countAnagram($array, $start) {
    $count = 0;
    for($i = $start+1; $i < count($array); $i++){
        if($array[$start] == $array[$i]){
            $count++;
        }
    }
    return $count;
}

function sort_arr(&$str){
    $str = str_split($str);
    sort($str);
    return implode('', $str);
}