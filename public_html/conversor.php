<?php

 /*    $testo_do_array = "AED,AMD,ANG,ARS,AUD,AWG,AZN,BAM,BBD,BDT,BGN,BHD,BIF,BMD,BND,BOB,BOV,BRL,BSD,BTN,BWP,BYN,BYR,BZD,CAD,CDF,CHE,CHF,CLF,CLP,CNH,CNY,COP,COU,CRC,CUC,CUP,CVE,CZK,DJF,DKK,DOP,DZD,EGP,ERN,ETB,EUR,FJD,FKP,GBP,GEL,GHS,GIP,GMD,GNF,GTQ,GYD,HKD,HNL,HRK,HTG,HUF,IDR,ILS,INR,IQD,IRR,ISK,JMD,JOD,JPY,KES,KGS,KHR,KMF,KPW,KRW,KWD,KYD,KZT,LAK,LBP,LKR,LRD,LSL,LYD,MAD,MDL,MGA,MKD,MMK,MNT,MOP,MRO,MUR,MVR,MWK,MXN,MXV,MYR,MZN,NAD,NGN,NIO,NOK,NPR,NZD,OMR,PAB,PEN,PGK,PHP,PKR,PLN,PYG,QAR,RON,RSD,RUB,RWF,SAR,SBD,SCR,SDG,SEK,SGD,SHP,SLL,SOS,SRD,SSP,STD,SVC,SYP,SZL,THB,TJS,TMT,TND,TOP,TRY,TTD,TWD,TZS,UAH,UGX,USD,USN,UYI,UYU,UZS,VEF,VND,VUV,WST,XAF,XCD,XDR,SDR,CFA,XOF,XPF,XSU,XUA,YER,ZAR,ZMW,ZWL";

   $moedas = explode(",", $testo_do_array);

   print_r($moedas); */



   $valor1 = $_POST["select1"];
   $valor2 = $_POST["select2"];
   
   

   $quantidade = $_POST["quantidade"];
   

   $link = "http://free.currencyconverterapi.com/api/v5/convert?q=" . $valor1 . "_" . $valor2 . "&compact=ultra&apiKey=d84c5ee4d2c5a5e3c52e";
   
   $ch = curl_init($link);

   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

   $response = curl_exec($ch);
   
   curl_close($ch);


   $data = json_decode($response, true);

$_POST['resultado']  = $data[$valor1 . "_" . $valor2] * $quantidade;

header("location: conversor.html");
?>