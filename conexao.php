<?php

//conexao Mysql:

	$servidor="localhost";
	$banco="dba_aluno";
	$usuario="root";
	$senha="";

	$pdo = new PDO("mysql:host=$servidor;dbname=$banco",$usuario,$senha);
    
    
//criando a conexao

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

?>
