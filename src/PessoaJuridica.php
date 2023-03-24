<?php
declare(strict_types=1);

namespace Matheus\PooWithPhp;

final class PessoaJuridica extends Pessoa implements PessoaJuridicaInterface
{
    public string $cnpj;

    
    public function getCnpj(): string
    {
        return $this->cnpj;
    }

    public function getName() : string
    {
        return $this->name;
    }
}
