<?php

function isMultipleOfThreeOrSeven($number)
{
    return $number % 3 === 0 || $number % 7 === 0;
}

$numbers = [9, 14, 21, 16, 27];

foreach ($numbers as $number) {
    if (isMultipleOfThreeOrSeven($number)) {
        echo "$number is a multiple of 3 or 7\n";
    } else {
        echo "$number is not a multiple of 3 or 7\n";
    }
}

?>