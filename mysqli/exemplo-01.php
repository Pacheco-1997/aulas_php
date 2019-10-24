
<?php
// instanciando a classe mysqli que é a nova maneira de connectar ao banco com php 7, esta classe quando instanciada pede
// 4 parametros, nome ou endereço do servidor, usuario do banco, senha, e o nome do banco
$conn = new mysqli("localhost", "root", "", "dbphp7");
// usando o atributo da classe mysqli connect_error podemos imprimir a falha mysqli
if($conn->connect_error){
    
    echo "Error: " . $conn->connect_error;
}
// metodo prepare da classe mysqli prepara um comando SQL
$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin,dessenha) values (?,?)");

// metodo bind_param passa os atributos para o prepared statement
$stmt->bind_param("ss" , $login, $pass);

$login = "user";
$pass = "12345";

$stmt-> execute();

// um statement só precisa ser preparado uma vez para ser usado 

$login = "pai";
$pass = "palmeiras";

$stmt-> execute();

?>