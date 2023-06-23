<?php
function calculateFactorial($number) {
    if ($number < 0) {
        return "Error: Factorial is not defined for negative numbers.";
    }

    $factorial = 1;

    for ($i = 1; $i <= $number; $i++) {
        $factorial *= $i;
    }

    return $factorial;
}

$number = 5;
$factorial = calculateFactorial($number);

echo "Factorial of $number is: $factorial";
