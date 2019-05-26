<?php

class Pessoa {

    public $nome = "Hasmus Lerdorf";
    protected $idade = 48;
    private $senha = "123456";

    public function verDados(){

        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>";
    }
}

$obj = new Pessoa();

//echo $obj->nome . "<br>";
//echo $obj->idade . "<br>";  geram fatal error
//echo $obj->senha . "<br>";

$obj->verDados();

?>