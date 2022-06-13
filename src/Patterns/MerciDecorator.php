<?php

declare(strict_types=1);

namespace App\Patterns;

class MerciDecorator
{
    private $hello;

    public function __construct(HelloInterface $hello)
    {
        $this->hello = $hello;
    }

    public function sayHello()
    {
        return $this->hello->sayHello() . ' Merci !';
    }
}