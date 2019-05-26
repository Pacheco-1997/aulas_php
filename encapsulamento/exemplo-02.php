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

class Programador extends Pessoa{
    public function verDados(){
         
        echo get_class($this) . "<br>"; // esta função get_class te diz de que classe vem o objeto 
        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>";
    }
}

$obj = new Programador();

//echo $obj->nome . "<br>";
//echo $obj->idade . "<br>";  geram fatal error
//echo $obj->senha . "<br>";

$obj->verDados();

?>