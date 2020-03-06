<?php

class Robot
{
    private $names = [];

    public function __construct()
    {
        $this->reset();
    }

    public function getName(): string
    {
        return current($this->names);
    }

    public function reset():void
    {
        while (in_array(($name = $this->generateName()), $this->names)) {
            continue;
        }
        array_unshift($this->names, $name);
    }

    public function generateName(): string
    {
        return implode('', [
            $this->shuffledAlphabet(),
            $this->shuffledAlphabet(),
            substr("00".mt_rand(0, 999), -3),
        ]);
    }

    public function shuffledAlphabet(): string
    {
        $alphabets = array_merge(range('a', 'z'), range('A', 'Z'));
        shuffle($alphabets);

        return end($alphabets);
    }
}
