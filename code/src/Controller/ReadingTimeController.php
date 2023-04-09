<?php

namespace App\Controller;

use App\Service\ReadingTimeCalculator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ReadingTimeController extends AbstractController
{
    private $readingTimeCalculator;

    public function __construct(ReadingTimeCalculator $readingTimeCalculator)
    {
        $this->readingTimeCalculator = $readingTimeCalculator;
    }

    public function calculateReadingTime(Request $request)
    {
        $text = $request->query->get('text');

        $reading_time = $this->readingTimeCalculator->calculateReadingTime($text);

        return new Response($reading_time . ' min');
    }
}
