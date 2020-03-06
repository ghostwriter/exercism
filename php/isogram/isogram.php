<?php

function isIsogram(string $input):bool
{
    $input_array = array_map('strtolower', array_filter(
        preg_split('/(?<!^)(?!$)/u', $input),
        function ($item) {
            return boolval(
                boolval(! empty(trim($item))) and
                boolval(trim($item) !== '-')
            );
        }
    ));
    if (count($input_array) === count(array_unique($input_array))) {
        return true;
    }
    return false;
}
