<?php
/* https://www.hackerrank.com/challenges/two-characters */

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$len);
fscanf($handle,"%s",$s);

function build_sets($letters) {
    $return = [];
    
    // i am not proud of this
    foreach ($letters as $first_letter) {
        foreach ($letters as $second_letter) {
            if ($first_letter == $second_letter
                || isset($return[$first_letter . $second_letter]) 
                || isset($return[$second_letter . $first_letter])) {
                continue;
            }
            
            $return[$first_letter . $second_letter] = $first_letter . $second_letter;
        }
    }
    
    return $return;
}

function string_repeats($string) {
    for ($i=0; $i < strlen($string); $i++) {
        if (isset($string[$i + 1])) {
            if($string[$i] == $string[$i + 1]) {
                return false;
            }
        }
    }
    
    return true;
}

$letters = array_unique(str_split($s));
$sets = build_sets($letters);
$result = 0;

foreach ($sets as $_set) {
    $exclude = array_diff($letters, str_split($_set));
    $test_case = str_replace($exclude, '', $s);

    if (string_repeats($test_case) && strlen($test_case) > $result) {
        $result = strlen($test_case);
    }
}

echo $result;

?>