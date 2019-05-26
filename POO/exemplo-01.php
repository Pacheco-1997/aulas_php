<?php

    class Pessoa{

         public $nome;//Atributo

         public function falar(){//Metodo

            return "O meu nome é " . $this-> nome;
         }


    }

    $victor = new Pessoa();
    $victor->nome = "Victor Pacheco";
    echo $victor->falar();



?>