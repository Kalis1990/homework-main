<?php

namespace App\Controller;

use App\Service\ReadingTimeCalculator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;


class ReadingTimeController extends AbstractController
{
    public function view(ReadingTimeCalculator $readingTimeCalculator): Response
    {
        $text = 'This is a sample article.';
        $readingTime = $readingTimeCalculator->calculate($text);

        return $this->render('article/view.html.twig', [
            'text' => $text,
            'readingTime' => $readingTime,
        ]);
    }
}