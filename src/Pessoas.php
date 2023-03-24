<?php
declare(strict_types=1);

namespace Matheus\PooWithPhp;

//Polimorfismo

//A ideia é garantir que 
//quando um método de determinado tipo (Pessoa) 
//for chamado, dentro será certeza que irá pegar o nome 
//independente da classe desde que ela implemente o tipo.

class Pessoas
{
    private static array $pessoas = [];

    public static function add(array $pessoas): void
    {
       self::$pessoas = $pessoas; 
    }

    public static function showNames(): void
    {
        foreach (self::$pessoas as $pessoa){
           seLf::show($pessoa);
        }
    } 
    private static function show(Pessoa $pessoa){
       echo $pessoa->getName() . PHP_EOL;
    }
}
