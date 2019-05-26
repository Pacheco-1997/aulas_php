<?php

abstract class Animal{

    public function falar(){

        return "Som";
    }

    public function mover(){

        return "anda";
    }
}

class Cachorro extends Animal {


    // ocorrendo polimorfismo no metodo falar, onde o metedo original falar da classe Animal foi usado e alterado na classe
    // cachorro, onde o retorno mudou de Som para Late
      public function falar(){

          
         return "Late";
      }

}

class Gato extends Animal{

    public function falar(){

        return "Mia";
    }
}

class Passaro extends Animal{

    public function falar(){

        return "Canta";
    }

    public function mover(){

        // a palavra reservado parent:: server para chamar o metodo da classe Pai
        return "Voa e " . parent:: mover();
    }
}

$dog = new Cachorro();

echo $dog->falar() . "</br>";
echo $dog->mover() . "</br>";

echo "-----------------------------------</br>";

$cat = new Gato();

echo $cat->falar() . "</br>";
echo $cat->mover() . "</br>";

echo "-----------------------------------</br>";

$bird = new Passaro();

echo $bird->falar() . "</br>";
echo $bird->mover() . "</br>";


?>