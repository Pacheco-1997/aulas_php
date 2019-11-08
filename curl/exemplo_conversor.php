<?php

   
    $link = "http://free.currencyconverterapi.com/api/v5/convert?q=USD_BRL&compact=ultra&apiKey=d84c5ee4d2c5a5e3c52e";

    $ch = curl_init($link);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

    $response = curl_exec($ch);

    curl_close($ch);


    $data = json_decode($response, true);
  
    

    foreach ($data as $key ) {
        echo "4 dolares são " . round($key  * 4, 2) . " reais";
    }




?>