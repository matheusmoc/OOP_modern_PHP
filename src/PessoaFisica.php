<?php

declare(strict_types=1); //tipagem forte

namespace Matheus\PooWithPhp;

class PessoaFisica
{ //propriedades
  //public: a propriedade pode ser alterado e mudada
  //private: a propriedade não pode ser acessada e alterada diretamente

   const OBJECT_TYPE = "Developer";
   private string $name;
   private static string $static_name;
   private string $email;
   private string $phone;
   private string $cpf;
   private int $age;

   public function __construct(
      string $name,
      string $email,
      string $cpf,
      string $phone,
      int $age,
      string $static_name
    ){
       $this->name = $name;
       $this->email = $email;
       $this->cpf = $cpf;
       $this->phone = $phone;
       $this->age = $age;
       self::$static_name = $static_name;
    }

   public function getInformation(): string
   {
      {
         //self pega objetos estáticos e constantes, neste caso não se pode usar o $this
         return $this->name . " - " . self::OBJECT_TYPE; 
      }
   }

   //ou 

   public static function getInformationStatic(): string
   {
      return self::$static_name . " - " . self::OBJECT_TYPE; 
      
   }


}
