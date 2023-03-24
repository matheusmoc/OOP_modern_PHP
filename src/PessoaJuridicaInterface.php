<?php


declare(strict_types=1);
namespace Matheus\PooWithPhp;

interface PessoaJuridicaInterface
{
    public function getCnpj(): string;
}