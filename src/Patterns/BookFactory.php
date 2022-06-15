<?php

declare(strict_types=1);

namespace App\Patterns;

final class BookFactory
{
    public static function create($name, $author)
    {
        return new Book($author, $name);
    }
}