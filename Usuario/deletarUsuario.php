<?php
	include "../includes/conexaoBD.php";

	$idUsuario = $_GET['id'];

	$deleta = mysql_query("DELETE FROM USUARIO WHERE id_pessoa = '$idUsuario'");

	header("Location:gridUsuario.php?sit=usuarioDeletado");

?>