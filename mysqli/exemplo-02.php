<?php

$conn = new mysqli("localhost", "root", "", "dbphp7");

if($conn->connect_error){

    echo "Error: " . $conn->connect_error;
}
// o metodo query() da classe mysqli executa comando simples de SQL 
$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

// criando array data
$data = array();

// MYSQLI_ASSOC é uma constante do classe mysqli que retorna apenas as strings associadas ao indice do array,
// neste caso usando a a funçõa fetch_assoc traz um resultado igual
while ($row = $result-> fetch_array(MYSQLI_ASSOC)){

   // agora adicionamos uma linha da tabela SQL($row) a cada indice do array $data, enquanto o while retornar dados
    array_push($data, $row);
    
}
// imprimimos na tela o array $data em forma de json
echo json_encode($data);


?>