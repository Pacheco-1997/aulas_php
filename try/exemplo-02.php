<?php

   function trataNome($name){

        if(!$name){
            throw new Exception("Nenhum nome foi informado", 1);
            
        }
        echo ucfirst($name). "</br>";
   }

   try {
       trataNome("Victor");
       trataNome("");

   } catch (Exception $e) {
       echo $e->getMessage() . " ";
       echo $e->getLine();

   }  finally {

       echo " Executou o bloco try";
   }


?>