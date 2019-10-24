<?php

// $file variavel do tipo resource, faz referencia a um arquivo externo
$file = fopen("log.txt", "a+");

$quem_fez_a_merda = "Victor Pacheco - ";

fwrite($file, $quem_fez_a_merda .date("Y-d-m H:i:s") . "\r\n");

fclose($file);

echo "Arquivo criado com sucesso";


?>