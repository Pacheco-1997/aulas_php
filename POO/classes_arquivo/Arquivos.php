

<form method="POST" enctype="multipart/form-data" action="Arquivos.php">
     
     <input type="file" name="fileUpload">
     <button id="sub" type="submit">Enviar</button>
</form>

<?php

class Arquivos{

    private $nome_arquivo;

    public function getNomeArquivo(){

        return $this-> nome_arquivo;
    }

    public function setNomeArquivo($nome_arquivo){

        $this->nome_arquivo = $nome_arquivo;
    }

    public function uploadArquivo(){
        
        if ($_SERVER["REQUEST_METHOD"] === "POST"){

            $file = $_FILES["fileUpload"];
        
            if ($file["error"]){
        
                throw new Exception("Error: " . $file["error"]);
            }
        
            $dirUploads = "uploads";
        
            if (!is_dir($dirUploads)){
        
                mkdir($dirUploads);
            }
        
            if (move_uploaded_file($file["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $file["name"])){
        
                echo "<script> alert('Upload feito com sucesso') </script>";
                echo "<a href='https://cdn.cz-usa.com/hammer/wp-content/uploads/2018/12/1012.png'>shuds</a>";
                // echo $file["size"];
        
        
            } else{
                throw new Exception("Não foi possivel fazer o upload");
                
            }
        }   

    }
}




 $teste = new Arquivos();

 $teste->setNomeArquivo("fileUpload");

 if (isset($_POST['submit'])){
     $teste->uploadArquivo();
 }
 

// $aqui = $teste->getNomeArquivo();





?>