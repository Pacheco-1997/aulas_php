<?php
  
     function lidaComErro($code, $message, $file, $line){         // função para lidar com erro, ordem dos parametros: codigo do erro,
          
          echo json_encode(array(
               "code" => $code,
               "message" => $message,
               "file" => $file,
               "line" => $line
          ));
        
     }

     set_error_handler("lidaComErro");

     echo 100 / 0;


?>