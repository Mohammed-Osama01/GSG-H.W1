<?php

function countDigitOccurrences($string)
{
    $count = 0;

    for ($i = 0; $i < strlen($string); $i++) {
        if (is_numeric($string[$i])) {
            $count++;
        }
    }

    return $count;
}

$string = "Hello123World456";

$digitCount = countDigitOccurrences($string);
echo "Number of digit occurrences: $digitCount\n";

?>