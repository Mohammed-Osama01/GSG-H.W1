<?php
function checkFirstAndLastTwoCharacters($str) {
    $length = strlen($str);
    
    if ($length < 2) {
        return false; 
    }
    
    $firstTwo = substr($str, 0, 2);
    $lastTwo = substr($str, -2);
    
    return $firstTwo === $lastTwo;
}

$strings = [
    'hello',
    'world',
    'abcde',
    'abba',
    'xyyx'
];

foreach ($strings as $str) {
    if (checkFirstAndLastTwoCharacters($str)) {
        echo "$str: First two and last two characters are the same\n";
    } else {
        echo "$str: First two and last two characters are different\n";
    }
}

?>