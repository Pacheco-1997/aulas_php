<?php

        $dt = new DateTime(); //transformando a variavel $dt em um objeto do tipo date time

        $periodo = new DateInterval("P15D");// transformando a variavel $periodo em um objeto do tipo DateInterval

        echo $dt->format("d/m/Y H:i:s"); // função format da classe date time imprime data e hora 

        echo "<br>";
        
        $dt->add($periodo);

        echo $dt->format("d/m/Y H:i:s");


        $data = new DateTime();

        $periodo2 = new DateInterval("P2D");

        echo "<br>";
        
        
        echo $data->format("d/m/y");

        echo "<br>";
         $data->add($periodo2);

         echo $data->format("d/m/y");

?>