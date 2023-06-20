<?php

function startsWithGo($str)
{
    $prefix = 'Go';
    $prefixLength = strlen($prefix);

    if (strlen($str) < $prefixLength) {
        return false;
    }

    $substring = substr($str, 0, $prefixLength);

    return $substring === $prefix;
}

$strings = [
    'Goose',
    'Goal',
    'Hello',
    'Goodbye'
];

foreach ($strings as $str) {
    if (startsWithGo($str)) {
        echo "$str starts with 'Go'\n";
    } else {
        echo "$str does not start with 'Go'\n";
    }
}

?>