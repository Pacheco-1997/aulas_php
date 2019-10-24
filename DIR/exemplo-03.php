<?php

$namedir = "seloko";
// criando um diretorio
// mkdir("C:\Users\Victor Pacheco\Music" .DIRECTORY_SEPARATOR. $namedir .DIRECTORY_SEPARATOR. "pica");

// apagando diretorio
// rmdir("C:\Users\Victor Pacheco\Music" .DIRECTORY_SEPARATOR. $namedir .DIRECTORY_SEPARATOR. "pica");

$arquivos = scandir("C:\Users\Victor Pacheco\Music" .DIRECTORY_SEPARATOR. $namedir);

foreach ($arquivos as $arquivo) {
    if(!in_array($arquivo, array(".",".."))){
        
        print_r($arquivo . "</br>");
    }
}


$teste = array(
    'peido', 'coco', 'dedonocu'
);

foreach ($teste as $key) {
    if(in_array($key, array('coco'))){
        print_r($key);
    }
}



?>