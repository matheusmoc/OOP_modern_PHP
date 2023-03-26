<?php

declare(strict_types=1);

namespace Matheus\PooWithPhp;

enum Naipe: string implements ColorfulInterface
{
    case Copas = "C";
    case Ouros = "O";
    case Paus = "P";
    case Espadas = "E";

    public function color(): string
    {
        return match ($this){
         Naipe::Copas, Naipe::Ouros => 'Vermelho',
         Naipe::Paus, Naipe::Espadas => 'Preto',   
        };
    }


    public function form(): string
    {
        return "Retângulo";
    }
}

