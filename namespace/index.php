<?php

      require_once("config.php");

      $cad = new Cadastro();

      $cad->setNome("Victor Pacheco");
      $cad->setEmail("Vpacheco@yahoo.com.br");
      $cad->setSenha("123456");

      echo $cad;

      


?>