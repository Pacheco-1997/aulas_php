<form method="POST" enctype="multipart/form-data" action="Arquivos.php">
     
     <input type="file" name="fileUpload">
     <button id="sub" name="submit" type="submit">Enviar</button>
</form>



<?php

include_once('Arquivos.php');


class usaArquivo extends Arquivos{

    $this->uploadArquivo();
}




?>