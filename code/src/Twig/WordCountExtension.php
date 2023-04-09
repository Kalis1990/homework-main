<?php
// namespace App\Twig;
// namespace App\Service;
// use Twig\Extension\AbstractExtension;
// use Twig\TwigFilter;

// class WordCountExtension
// {
// public function wordCount($text)
// {
//     // remove HTML tags and entities
//     $text = strip_tags($text);
//     $text = html_entity_decode($text);

//     // remove punctuation marks and symbols
//     $text = preg_replace('/[^\p{L}\p{N}\s]/u', '', $text);

//     // split text into words
//     $words = preg_split('/\s+/u', $text);

//     // count the number of words with more than 3 letters
//     $count = 0;
//     foreach ($words as $word) {
//         if (mb_strlen($word) > 3) {
//             $count++;
//         }
//     }

//     return $count;
// }
// }