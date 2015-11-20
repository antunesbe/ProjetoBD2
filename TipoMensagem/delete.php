<?php
	include "../includes/conexaoBD.php";

	$idTipoMsg = $_GET['id'];

	$deleta = mysql_query("DELETE FROM TIPO_MENSAGEM WHERE id_tipo_mensagem = '$idTipoMsg'");

	header("Location:gridTipoMensagem.php?sit=tipoMsgDeletado");

?>