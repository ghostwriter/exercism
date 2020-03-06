<?php

class bob
{
    public $message;
    public $rules;

    public function __construct()
    {
        $this->rules = [
            'question' => 'Sure.',
            'caps' => 'Whoa, chill out!',
            'empty' => 'Fine. Be that way!',
            'default' => 'Whatever.',
        ];
    }

    public function respondTo($message)
    {
        $this->message = trim($message);

        return $this->parseMessage();
    }

    private function parseMessage()
    {
        return $this->isEmpty();
    }

    private function isEmpty()
    {
        if (empty($this->message)) {
            return $this->rules['empty'];
        }

        return $this->isFullCaps();
    }

    private function isFullCaps()
    {
        if (mb_strtoupper($this->message, 'UTF-8') === $this->message && preg_match('#[A-Z]#', $this->message)) {
            return $this->rules['caps'];
        }

        return $this->isQuestion();
    }

    private function isQuestion()
    {

        if (strpos($this->message, '?', intval(strlen($this->message) - 1)) !== false) {
            return $this->rules['question'];
        }

        return $this->rules['default'];
    }
}