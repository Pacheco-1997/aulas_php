<?php
 
   session_id('seqdkkod15f7jl8u2sngj4usfq');

   require_once('config.php');

    session_regenerate_id();

     echo session_id();

     echo "<br><br><br>";

     var_dump($_SESSION);
?>