<?php

function findLargestNumber($num1, $num2, $num3)
{
    $largest = $num1;

    if ($num2 > $largest) {
        $largest = $num2;
    }

    if ($num3 > $largest) {
        $largest = $num3;
    }

    return $largest;
}

//
$num1 = 10;
$num2 = 5;
$num3 = 8;

$largestNumber = findLargestNumber($num1, $num2, $num3);
echo "The largest number is: $largestNumber\n";

?>