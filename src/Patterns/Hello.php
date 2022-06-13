<?php

declare(strict_types=1);

namespace App\Patterns;

class Hello
{
    const HELLO = 'Hello';

    public function sayHello(): string
    {
        return self::HELLO;
    }
}