<?php

$namedir = "images";

if (!is_dir($namedir)){
   // cria diretorio
    mkdir($namedir);
    echo "<script>alert('diretorio criado com secesso')</script>";

} else {

    // remove diretorio
    rmdir($namedir);
    echo "Já existe o diretorio: $namedir foi excluido";
}


?>