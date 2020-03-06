<?php


// This is only a SKELETON file for the "Hamming" exercise. It's been provided as a
// convenience to get you started writing code faster.

function distance($a, $b)
{
    $a = str_split($a);
    $b = str_split($b);
    $distance = 0;
    foreach ($a as $key => $value) {
        if ($value != $b[$key]) {
            ++$distance;
        }
    }

    return $distance;
}