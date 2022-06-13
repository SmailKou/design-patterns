<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

$hello = new \App\Patterns\Hello();
$hello = new \App\Patterns\CaVaDecorator($hello);
$hello = new \App\Patterns\MerciDecorator($hello);

echo $hello->sayHello();
