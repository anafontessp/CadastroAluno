<?php
session_start();
include("conexao2.php");

$nome = $_POST["nome"];
$email = $_POST["email"];
$endereco =$_POST["endereco"];
$cidade = $_POST["cidade"];
$uf = $_POST["uf"];

//testando o POST:
//echo "nome: $nome<br>";
//echo "email: $email<br>";
//echo "endereco: $endereco<br>";
//echo "cidade: $cidade<br>";
//echo "uf: $uf<br>";

$result_usuario = "INSERT INTO ALUNO (nome, email, endereco, cidade, uf) VALUES ('$nome', '$email', '$endereco', '$cidade', '$uf')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
    $session['msg'] = "Aluno Cadastrado com sucesso"; 
    header("Location: Cadastro_realizado.php");
}else{
    header("Location: Cadastro_realizado.php");
}