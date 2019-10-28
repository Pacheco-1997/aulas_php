<?php

$filename = "usuarios.csv";// nome do arquivo

if(file_exists($filename)){// abrindo arquivo caso exista

    $file = fopen($filename, "r");// atribuindo em file oque retornar da função fopen, fopen abre o arquivo pelo nome e da permição de leitura

    $headers = explode(",", fgets($file));

    $data = array();

    while ($row = fgets($file)) {
        
        $rowData = explode(",", $row);
        $linha = array();

        for ($i = 0 ; $i <count($headers) ; $i++){
             
            $linha[$headers[$i]] = $rowData[$i];
        }
        array_push($data, $linha);
    }

    fclose($file);

    echo json_encode($data);
    
}

?>