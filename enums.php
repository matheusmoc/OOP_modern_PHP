<?php declare(strict_types=1);

use Matheus\PooWithPhp\ColorfulInterface;
use Matheus\PooWithPhp\Colors;
use Matheus\PooWithPhp\Naipe;
use Matheus\PooWithPhp\Tamanho;

require_once __DIR__ . "/vendor/autoload.php";

function paint(ColorfulInterface $colorful)
{
    echo "Pintando a cor: ".$colorful->color() . PHP_EOL;
}

paint(Naipe::Paus);
echo Naipe::Paus->form(). PHP_EOL;

print_r(Naipe::cases());

echo Tamanho::deComprimento(49)->name . PHP_EOL;

echo Tamanho::Enorme->name;