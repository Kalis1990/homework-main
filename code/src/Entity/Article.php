<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArticleRepository::class)]
class Article
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $text = null;

    #[ORM\Column]
    private ?int $readingTime;

    #[ORM\Column(length: 255)]
    private ?string $image = null;


    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string|null $title
     */
    public function setTitle(?string $title): void
    {
        if (!empty($title)) {
            $this->title = $title;
        }
    }

    /**
     * @return string|null
     */
    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * @param string|null $text
     */
    public function setText(string $text): self
    {
        $this->text = $text;

        // calculate and set the reading time
        $words = str_word_count(strip_tags($this->text), 1);
        $filteredWords = array_filter($words, function ($word) {
            return mb_strlen($word) > 3;
        });
        $wordCount = count($filteredWords);
        $readingTime = ceil($wordCount / 200);
        $this->setReadingTime($readingTime);

        return $this;
    }

    public function getReadingTime(): ?int
    {
        return $this->readingTime;
    }

    public function setReadingTime(int $readingTime): self
    {
        $this->readingTime = $readingTime;

        return $this;
    }


    /**
     * @return string|null
     */
    public function getImage(): ?string
    {
        return $this->image;
    }

    /**
     * @param string|null $image
     */
    public function setImage(?string $image): void
    {
        if (!empty($image)) {
            $this->image = $image;
        }
    }

}