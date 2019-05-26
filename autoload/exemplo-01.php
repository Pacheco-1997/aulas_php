<?php
// função magica __autoload serve para chamar automaticamente uma serie de classes encadeadas
// como neste exemplo ele chama a classe DelRey que por sua vez carrega a classe automovel
function __autoload($nomeClasse){

    var_dump($nomeClasse);
    echo "</br>";
    require_once("$nomeClasse.php");
}

$carro = new DelRey();

$carro->acelerar(80);
?>