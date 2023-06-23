<?php
function multiplyArrays($array1, $array2) {
    $result = array();

    $count1 = count($array1);
    $count2 = count($array2);
    $maxLength = max($count1, $count2);

    for ($i = 0; $i < $maxLength; $i++) {
        $value1 = isset($array1[$i]) ? $array1[$i] : 1;
        $value2 = isset($array2[$i]) ? $array2[$i] : 1;
        $result[] = $value1 * $value2;
    }

    return $result;
}

$array1 = array(2, 4, 6);
$array2 = array(3, 5, 2, 1, 8);
$resultArray = multiplyArrays($array1, $array2);

print_r($resultArray);

