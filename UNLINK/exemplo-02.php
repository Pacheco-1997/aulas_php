<?php

/*if (!is_dir("images")) mkdir("images");

foreach (scandir("images") as $item) {
    if(!in_array($item, array(".",".."))){

        unlink("images/" . $item);
    }
}

echo "OK";*/


function checkPalidrome($inputStream){

    return $inputStream == strrev($inputStream);
}

if(checkPalidrome("ab") == true){

    echo"É um palindrome";
} else{
    echo "Não é um palindrome";
}
?>