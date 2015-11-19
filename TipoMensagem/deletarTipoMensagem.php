<?php
	include "../includes/conexaoBD.php";

	//$idUsuario = $_GET['nome'];
	//Se pegar nome, não corre risto de deletar 2 iguais??

	$deleta = mysql_query("DELETE FROM TIPO_MENSAGEM WHERE nome_tipo_msg = '$nome'");

	header("Location:gridTipoMensagem.php?sit=mensagemDeletada");
	
?>