<?php
// no trecho de codigo (int ...$valores) significa que todos os parametros da função são do tipo inteiros e esses parametros serão armazenados em $valores
function soma(int ...$valores){

    return array_sum($valores);

   
}

echo soma(2,2,2,2);

echo"<br>";

echo soma(25,33);

echo"<br>";

echo soma(1.5,3.2);

echo"<br>";



?>