<?php

function isArmstrongNumber(int $input): bool
{
    return boolval($input === array_reduce(
        str_split($input),
        function ($total, $number) use ($input) {
            return array_sum([$total, pow($number, strlen($input))]);
        },
        0
    ));
}
