<?php
function findLargerInRange($num1, $num2)
{
    if ($num1 >= 20 && $num1 <= 30 && $num2 >= 20 && $num2 <= 30) {
        return max($num1, $num2); 
    } elseif ($num1 >= 20 && $num1 <= 30) {
        return $num1; 
    } elseif ($num2 >= 20 && $num2 <= 30) {
        return $num2; 
    } else {
        return 0; 
    }
}

$num1 = 25;
$num2 = 28;

$largerInRange = findLargerInRange($num1, $num2);

if ($largerInRange === 0) {
    echo "Neither number is in the range 20..30\n";
} else {
    echo "The larger number in the range 20..30 is: $largerInRange\n";
}

?>