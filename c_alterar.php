<?php

    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $endereco = $_POST["endereco"];
    $cidade = $_POST["cidade"];
    $uf = $_POST["uf"];

   
    include("conexao.php");


    try {
        $stmt = $pdo->prepare("update tbcadastro set nome = '$nome', email = '$email', endereco = '$endereco', cidade = '$cidade', uf = '$uf', where idcadastro = '$id'");
        $stmt ->execute();
        echo "<script>alert('Dados enviados com sucesso')</script>";
        $pdo = null;
        header("Location:palavra.php");
    }

    catch (PDOException $e) {
      echo "Erro: " . $e -> getmessage();
    }



?>
