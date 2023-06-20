<?php
function reverseString($string)
{
    $reversed = '';
    for ($i = strlen($string) - 1; $i >= 0; $i--) {
        $reversed .= $string[$i];
    }

    return $reversed;
}

$string = "Hello, World!";

$reversedString = reverseString($string);
echo "Reversed string: $reversedString\n";

?>