<?php

interface Veiculo{

    public function acelerar($velocidade);
    public function freiar($velocidade);
    public function trocarMarcha($marcha);
}

interface Teste{

    public function teste($teste);
}

abstract class Automovel implements Veiculo, Teste{  // uma clase abstrata n serve para ser instanciada, ela é apenas para ser 
    // extendida por outra classe
       
    public function acelerar($velocidade){
         echo "O veiculo acelerou até " . $velocidade . " km/h";
    }
    public function freiar($velocidade){
        echo "O veiculo freiou até " . $velocidade . " km/h";
    }
    public function trocarMarcha($marcha){
        echo "O veiculo engatou a marcha " . $marcha;
    }

    public function teste($teste){
        echo $teste;
    }
}

class DelRey extends Automovel {

    public function empurrar(){

    }
}

$carro = new DelRey();

$carro->acelerar(200);
echo "<br>";

$carro->teste("teste");


?>