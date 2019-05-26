<?php

     class Endereco{

        private $logradouro;
        private $numero;
        private $cidade;

        // metotodos magicos são metodos que são chamados
        //  de forma automatica a partir de alguma ação programada,
        // são sempre obrigatoriamente acompanhados por dois underlines
        public function __construct($a,$b,$c){  
            
            $this->logradouro = $a;
            $this->numero = $b;
            $this->cidade = $c;
        }

        public function __destruct(){

             //var_dump("Destruir");
        }

        public function __toString(){
           return $this->logradouro . ", " . $this->numero . ", " . $this->cidade; 
        }
     }

     $meuEndereco = new Endereco("Av Anibal correia","1629","Barueri");

   //  var_dump($meuEndereco);

    //  unset($meuEndereco);

    echo $meuEndereco;
?>