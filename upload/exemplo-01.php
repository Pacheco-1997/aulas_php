
<form method="POST" enctype="multipart/form-data">
     
        <input type="file" name="fileUpload">
        <button type="submit">Enviar</button>
</form>

<?php

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

?>