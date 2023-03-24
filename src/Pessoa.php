<?php

declare(strict_types=1);

namespace Matheus\PooWithPhp;


abstract class Pessoa {
    public string $name;

    public function showName(): void
    {
        echo $this->name . PHP_EOL;
    }

    abstract public function getName() : string;
}

