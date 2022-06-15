<?php

namespace App\Patterns;

final class BookFactory
{
    public static function create($name, $author)
    {
        return new Book($author, $name);
    }
}