<?php
function isPrime($number) {
    if ($number <= 1) {
        return false;
    }

    // Check for divisibility from 2 to the square root of the number
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}
$number = 17;
$isPrime = isPrime($number);

if ($isPrime) {
    echo "$number is a prime number";
} else {
    echo "$number is not a prime number";
}
