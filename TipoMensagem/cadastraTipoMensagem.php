<?php
	session_start();
	include "../includes/conexaoBD.php";

	$nome = $_POST['nome'];
	$descricao = $_POST['descricao'];

	$sql= mysql_query("INSERT INTO TIPO_MENSAGEM VALUES (null,'$nome','$descricao')");


	if(!$sql){
		echo mysql_error();
	}else{
		echo "msg enviada";
	}
?>