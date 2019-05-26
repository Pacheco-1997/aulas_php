<?php

    spl_autoload_register(function($nameClass){
         
        $dirClass = "class";
        // DIRECTORY_SEPARATOR é uma constante para para barra de separação em qualquer sistema operacional
        $fileName =  $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php";

        if(file_exists($fileName)){
            require_once($fileName);
        }

    });



?>