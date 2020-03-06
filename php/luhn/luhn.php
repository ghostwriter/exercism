<?php

function isValid(string $input):bool
{
    if (! preg_match('#^[\d\s]+$#', $input)) {
        return false;
    }

    $input_array = array_map(
        'intval',
        array_filter(
            str_split($input),
            function ($item) {
                return is_numeric($item);
            }
        )
    );

    if (count($input_array) > 1) {
        $temp_array = [];
        while ($nextItem = array_pop($input_array)) {
            $temp_array[] = $nextItem;
        }

        foreach ($temp_array as $key => $temp_array_item) {
            if (array_sum([$key, 1]) % 2 === 0) {
                $itemDoubled = array_product([$temp_array_item, 2]);
                if ($itemDoubled > 9) {
                    $itemDoubled = array_sum([-9, $itemDoubled]);
                }
                $temp_array[$key] = $itemDoubled;
            }
        }

        if (array_sum($temp_array) % 10 === 0) {
            return true;
        } else {
            return false;
        }
    }

    return false;
}
