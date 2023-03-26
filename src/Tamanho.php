<?php

declare(strict_types=1);

namespace Matheus\PooWithPhp;

enum Tamanho
{
   case Pequeno;
   case Medio;
   case Grande;

   public const Enorme = self::Grande;
   public static function deComprimento(int $cm): static
   {
    return match (true) {
        $cm < 50 => static::Pequeno,
        $cm < 100 => static::Medio,
        default => static::Grande
    };
   }
}