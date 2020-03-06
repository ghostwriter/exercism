<?php

function toRna($str)
{
    $rules = [
        'A' => 'U',
        'C' => 'G',
        'G' => 'C',
        'T' => 'A',
    ];
    if (strlen($str) > 1) {
        $temp = '';
        foreach (str_split($str) as $key => $value) {
            $temp .= toRna($value);
        }

        return $temp;
    }

    return $rules[$str];
}