<?php

declare(strict_types=1);

namespace Matheus\PooWithPhp;

final class Funcionario extends Pessoa implements FuncionarioInterface
{
    //DRY = Don't repeat yourself 
    public string $age;
    public string $gender;
    public string $cpf;


    public function getCpf(): string
    {
        return $this->cpf;
    }

    public function setCpf(string $cpf) : void 
    {
        $this->cpf = $cpf;
    }

    public function getName() : string
    {
        return $this->name;
    }
}