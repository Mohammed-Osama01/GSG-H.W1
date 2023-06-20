<?php
function findNearestTo100($num1, $num2)
{
    if ($num1 === $num2) {
        return 0;
    }

    $distance1 = abs(100 - $num1);
    $distance2 = abs(100 - $num2);

    if ($distance1 < $distance2) {
        return $num1; 
    } else {
        return $num2; 
    }
}


$num1 = 90;
$num2 = 110;

$nearestTo100 = findNearestTo100($num1, $num2);

if ($nearestTo100 === 0) {
    echo "The numbers are equal\n";
} else {
    echo "The number nearest to 100 is: $nearestTo100\n";
}

?>