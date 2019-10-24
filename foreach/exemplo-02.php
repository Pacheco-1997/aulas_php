       <div id="x"> 
        <form action="">
            <input type="text" name="nome">
            <input type="date" name="nascimento">
            <input type="submit" value="OK">
        </form>
   
    <style>
        #x{
            margin: auto;
            width: 50%;
            padding: 10px;
            text-align: center;
            
        }
    </style>
        <?php
    if (isset($_GET)){

        foreach ($_GET as $key => $value) {
            
            echo "Nome do campo: " . $key . "</br>";
            echo "Valor do Campo: " . $value . "</br>";
            echo "<hr>";
        }
    }
   
        ?>
         </div>