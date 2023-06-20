<?php

function calculateDigitSum($number)
{
    $sum = 0;
    $numberString = (string) $number;
    for ($i = 0; $i < strlen($numberString); $i++) {
        $sum += (int) $numberString[$i];
    }

    return $sum;
}

$number = 12345;

$digitSum = calculateDigitSum($number);
echo "Sum of digits: $digitSum\n";

?>