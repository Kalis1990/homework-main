<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use App\Service\ReadingTimeCalculator;

class ReadingTimeExtension extends AbstractExtension
{
    private $readingTimeCalculator;

    public function __construct(ReadingTimeCalculator $readingTimeCalculator)
    {
        $this->readingTimeCalculator = $readingTimeCalculator;
    }

    public function getFilters(): array
    {
        return [
            new TwigFilter('reading_time', [$this, 'calculateReadingTime']),
        ];
    }

    public function calculateReadingTime(string $text): string
    {
        $minutes = $this->readingTimeCalculator->calculateReadingTime($text);

        return str_replace('X min', $minutes . ' min', $text);
    }
}
