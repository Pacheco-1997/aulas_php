<?php

    spl_autoload_register(function($nameClass){

        var_dump($nameClass);
         
        $dirClass = "class";
        // DIRECTORY_SEPARATOR é uma constante para para barra de separação em qualquer sistema operacional
        $fileName =  $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php";

        if(file_exists($fileName)){  /*em um if para compararar algo a true basta não colacar nada, true é defolt*/ 
            require_once($fileName);
        }

    });



?>