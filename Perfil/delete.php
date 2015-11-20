<?php
	include "../includes/conexaoBD.php";

	$idPerfil = $_GET['id'];

	$deleta = mysql_query("DELETE FROM PERFIL WHERE id_perfil = '$idPerfil'");

	header("Location:gridPerfil.php?sit=perfilDeletado&page=1");

?>