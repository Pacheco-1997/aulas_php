<?php

$conn = new mysqli("localhost", "root", "", "dbphp7");

if($conn->connect_error){

    echo "Error: " . $conn->connect_error;
}

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin,dessenha) values (?,?)");

$stmt->bind_param("ss" , $login, $pass);

$login = "user";
$pass = "12345";

$stmt-> execute();

// um statement só precisa ser preparado uma vez para ser usado 

$login = "pai";
$pass = "palmeiras";

$stmt-> execute();

?>