<?php

// This is only a SKELETON file for the "Hello World" exercise.
// It's been provided as a convenience to get you started writing code faster.

function helloWorld($name = null)
{
    return 'Hello, '.($name ?: 'World').'!';
}