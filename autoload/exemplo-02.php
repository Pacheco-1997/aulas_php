<?php

function incluirClasses($nomeClasse){

    if(file_exists($nomeClasse . ".php") === true){
         
        require_once($nomeClasse . ".php");
    }
    
}
// spl_autoload_register serve para registrar mais de uma função autoload
spl_autoload_register("incluirClasses");
spl_autoload_register(function($nomeClasse){
    // DIRECTORY_SEPARATOR serve para separar diretórios
    if(file_exists("Abstratas" . DIRECTORY_SEPARATOR . $nomeClasse . ".php") === true){
    require_once("Abstratas" . DIRECTORY_SEPARATOR . $nomeClasse . ".php");
    }
});

$carro = new DelRey();

$carro->acelerar(80);


?>