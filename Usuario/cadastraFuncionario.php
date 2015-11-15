<?php
	include "../includes/conexaoBD.php";

	$nome = $_POST['nome'];
	$data_nasc = $_POST['data_nasc'];
	$cpf = $_POST['cpf'];
	$perfil = $_POST['perfil'];
	$depto = $_POST['departamento'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$pegaDepto = mysql_query("SELECT id_departamento FROM DEPARTAMENTO WHERE '$depto'=nome_depto");

	$pegaPerfil = mysql_query("SELECT id_perfil FROM PERFIL WHERE '$perfil'=nome");

	$sql= mysql_query("INSERT INTO USUARIO VALUES (03,'$data_nasc','$email','$nome','$senha','$cpf','$pegaDepto','$pegaPerfil')");


	if(!$sql){
		echo mysql_error();
	}else{
		echo "msg enviada";
	}

	

?>