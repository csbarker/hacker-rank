<?php
/* https://www.hackerrank.com/challenges/gem-stones */
$handle = fopen ("php://stdin", "r");
function gemstones($arr){
    $temp = array_map('str_split', $arr);
    $counts = [];
        
    foreach ($temp as $k => $v) {
        $counts = array_merge(
            $counts,
            array_unique($v)
        );
    }
    
    $counts = array_count_values($counts);
    $compositions = count($arr);
    $final_count = 0;
    
    foreach ($counts as $k => $v) {
        if ($v < $compositions) continue;
        $final_count++;
    }
    
    return $final_count;
}

fscanf($handle, "%i",$n);
$arr = array();
for($arr_i = 0; $arr_i < $n; $arr_i++){
   fscanf($handle,"%s",$arr[]);
}
$result = gemstones($arr);
echo $result . "\n";

?>