<?php

declare(strict_types=1);

namespace App\Patterns;

class Book
{
    private $bookAuthor;
    private $bookName;

    public function __construct($author, $name)
    {
        $this->bookAuthor = $author;
        $this->bookName = $name;
    }

    public function getBookNameAndAuthor(): string
    {
        return $this->bookAuthor . ' - ' . $this->bookName . PHP_EOL;
    }
}