<?php

require __DIR__ . '/vendor/autoload.php';

use Matheus\PooWithPhp\Funcionario;
use Matheus\PooWithPhp\Pessoa;
use Matheus\PooWithPhp\PessoaEstrangeira;
use Matheus\PooWithPhp\PessoaFisica;
use Matheus\PooWithPhp\PessoaJuridica;
use Matheus\PooWithPhp\Pessoas;

//propriedade
// $pessoaFisica->name = "Matheus";
// $pessoaFisica->email = "matheusandrade009@gmail.com";
// $pessoaFisica->age = 24;
// $pessoaFisica->cpf = "00000000000";
// $pessoaFisica->phone = "(11)1111-1111";


// propriedade por método
// recomendado ao utilizar protected or private
// $pessoaFisica = new PessoaFisica();
// $pessoaFisica->setName("Matheus");
// $pessoaFisica->setEmail("matheusandrade009@gmail.com");
// $pessoaFisica->setAge(24);
// $pessoaFisica->setCpf("00000000000");
// $pessoaFisica->setPhone("(11)1111-1111");


// caso fosse public a propriedade poderia ser alterada
// $pessoaFisica->email = "naoeomatheus@gmail.com";

//----- BOA PRATICA ----//
$pessoaFisica = new PessoaFisica(
    "Matheus", 
    "matheusandrade009@gmail.com", 
    "00000000000", 
    "(11)1111-1111", 
    24,
    "Matheus static"
);
// dump($pessoaFisica); //objeto
 
// //---STATIC---//
// dump($pessoaFisica->getInformation()); 
// //ou
// dump($pessoaFisica::getInformationStatic());
// //ou 
// dump(PessoaFisica::getInformationStatic());





$pessoaJuridica = new PessoaJuridica;
$pessoaJuridica->name = "Matheus Developer LTDA";
$pessoaJuridica->cnpj = "12312312313/12";

$funcionario = new Funcionario; //herança
$funcionario->name = "Matheus";
$funcionario->age = 24;
$funcionario->cpf = '000.000.000.00';
$funcionario->gender = "M";
$funcionario->setCpf('123012-3012120-321'); 


// $pessoaEstrangeira = new PessoaEstrangeira;
// $pessoaEstrangeira->name = "John Wick";
// $pessoaEstrangeira->age = 42;
// $pessoaEstrangeira->gender = "M";

Pessoas::add([$funcionario, $pessoaJuridica]);
Pessoas::showNames();