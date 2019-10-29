<?php

$palavroes = "porra carlha buceta filho_da_puta vai_se_fuder viadinho_de_merda";

$array_palavroes = explode(" ", $palavroes);

echo count($array_palavroes);

for ($i = 0; $i < 5; $i++){
    echo $array_palavroes[$i] . "\n";
}


$juntando_de_novo = implode(", ", $array_palavroes);

echo str_replace("_", " ", $juntando_de_novo);

/* $gui_gay = true;



while($gui_gay){
    echo "Gui gay" . ", ";
} */

 
?>