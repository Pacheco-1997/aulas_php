<?php
   $meses = array(
       "Janeiro","Fevereiro","Março",
       "Abril","Maio","Junho",
       "Julho","Agosto","Setempro",
       "Outubro","Novembro","Dezembro"
   );

   foreach ($meses as $index => $mes) { // a sintaxe do foreach é o nome da variavel em que o array se encontra,
    // a ultima posição é o valor do array, a posição do meio é opcional é onde fica o indice do array, caso seja omitida 
    // a sintaxe correta, nesse caso é: foreach ($meses as $mes)
       echo "Indice: " . $index . "   ----------->   ";
       echo "O mes é " . $mes . "</br>";
   }

?>