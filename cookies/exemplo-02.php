<?php

      if (isset($_COOKIE["NOME_DO_COOKIE"])){


          $array = json_decode($_COOKIE["NOME_DO_COOKIE"], true);   // sem o true da linha seria um objeto

          echo $obj['empresa'];
      }

?>