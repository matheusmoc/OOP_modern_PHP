<?php

declare(strict_types=1);

namespace Matheus\PooWithPhp;

//a classe segue contratos e devemos confiar nelas.
interface FuncionarioInterface
{
    public function getCpf(): string;
}