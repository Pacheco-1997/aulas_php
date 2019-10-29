<?php

    $filename = "C:\Users\Victor Pacheco\Downloads\gretchen.png";

    $base64 = base64_encode(file_get_contents($filename)); // com a função file_get_contents é posivel opter o conteudo completo de um arquivo
    // com base64_encode transformamos os dados para base64 

    $fileinfo = new finfo(FILEINFO_MIME_TYPE);// 

    $mimetype = $fileinfo->file($filename);


    $base64encode = "data:". $mimetype .";base64, " . $base64;

    
    
?>

<a href="<?=$base64encode?>" target="_blank">Link para imagem</a>

<img src="<?=$base64encode?>">