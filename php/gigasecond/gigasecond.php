<?php

function from($date)
{
    $giga = 1000000000;
    $date->add(new DateInterval("PT{$giga}S"));

    return $date;
}