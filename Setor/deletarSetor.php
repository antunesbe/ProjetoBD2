<?php
	include "../includes/conexaoBD.php";

	$idDepto = $_GET['id'];

	$deleta = mysql_query("DELETE FROM DEPARTAMENTO WHERE id_departamento = '$idDepto");

	header("Location:gridSetor.php?sit=deptoDeletado");

?>