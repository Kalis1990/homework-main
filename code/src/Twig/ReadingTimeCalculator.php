<?php
namespace App\Service;

use Symfony\Component\String\Slugger\AsciiSlugger;
use Symfony\Component\String\UnicodeString;
use Symfony\Component\String\Slugger\SluggerInterface;

class ReadingTimeCalculator
{
    private $slugger;

    public function __construct(SluggerInterface $slugger)
    {
        $this->slugger = $slugger;
    }

    public function calculateReadingTime(string $text): int
    {
        $words = $this->slugger->slug($text)->split(' ');
        $num_words = 0;

        foreach ($words as $word) {
            $word = new UnicodeString($word);
            if ($word->length() > 3) {
                $num_words++;
            }
        }

        $minutes = ceil($num_words / 200);

        return $minutes;
    }
}