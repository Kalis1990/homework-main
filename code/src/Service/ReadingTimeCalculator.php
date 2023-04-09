<?php

namespace App\Service;

class ReadingTimeCalculator
{
    private int $wordsPerMinute;

    public function __construct(int $wordsPerMinute)
    {
        $this->wordsPerMinute = $wordsPerMinute;
    }

    public function calculate(string $text): int
    {
        $words = str_word_count($text, 0, '1234567890');
        $words = count(array_filter($words, fn($word) => strlen($word) > 3));
        return (int) ceil($words / $this->wordsPerMinute);
    }
}