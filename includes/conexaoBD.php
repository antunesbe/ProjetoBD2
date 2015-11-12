<?php
	//Conexão com o BD MySQL
	$conexao = mysql_connect("localhost","root","");

	if (!$conexao){
		die ("Erro ao conectar com o MySql");
	}
	//Seleciona o banco dentro do MySQL
	$banco = mysql_select_db("trabalhocomunitario",$conexao);

	if(!$banco){
		die ("Banco não encontrado");
	}
?>