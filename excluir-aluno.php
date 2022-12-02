<?php
  
    $id = $_GET['id'];

    include("conexao.php");

    try {

        $stmt = $pdo->prepare("delete from aluno where id_aluno='$id'");

        $stmt ->execute();

        $pdo = null;

        header("Location:c_consultar.php");

    }

    catch (PDOException $e) {

        echo "Erro: " . $e -> getmessage();

    }

?>