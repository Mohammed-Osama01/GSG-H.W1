<?php
function findLongestString($strings, &$longestIndex) {
    $longestString = '';
    $longestIndex = -1;

    foreach ($strings as $index => $string) {
        if (strlen($string) > strlen($longestString)) {
            $longestString = $string;
            $longestIndex = $index;
        }
    }

    return $longestString;
}
