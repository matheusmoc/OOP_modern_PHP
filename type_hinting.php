<?php

//fortemente tipado
declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';


class Person
{
    public function greetings(string $name, int $age, array $imc): string
    {
       $result = "Hi $name, you are $age years old" . PHP_EOL;
       $result .= $imc(60.45, 1.80);

       return $result;
    }

    function imc(int|float $weight, int|float $height): string
    {
        $imcCalculated = $weight / ($height * $height);

        return "O seu IMC está em: $imcCalculated";
    }
}

$person = new Person;

echo $person->greetings(
    'Matheus',
    24,
    array($person, 'imc')
) . PHP_EOL;
