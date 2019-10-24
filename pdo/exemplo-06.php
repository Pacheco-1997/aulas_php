<?php
include_once "config.php";

    $conn->beginTransaction();

    $stmt = $conn->prepare("DELETE FROM tb_usuarios  WHERE idusuario = ?");

    
    $id = 5;


    $stmt->execute(array($id));

    //$conn->rollback();

    $conn->commit();

    echo "<script>". "alert('Delete OK !!!')" ."</script>"
?>