<?php
	include "../includes/conexaoBD.php";

	$idPrivilegio = $_GET['id'];
	$idRemetente = $_GET['idRemetente']

	$deleta = mysql_query("DELETE FROM PRIVILEGIO WHERE id_privilegio = '$idPrivilegio'");

	header("Location:cadastrarPrivilegio.php?id=". $idRemetente ."&sit=privilegioDeletado&page=1");

?>