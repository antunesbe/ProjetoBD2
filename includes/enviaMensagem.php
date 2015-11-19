<?php
	include "conexaoBD.php";
	$destinatario = $_POST['destinatario'];
	$tipoMensagem = $_POST['tipoMsg'];
	$assunto = $_POST['assunto'];
	$mensagem = $_POST['mensagem'];

	//$sql = mysql_query("INSERT INTO MENSAGEM VALUES (01,$assunto, 0, $mensagem, $destinatario,null,null,$tipoMensagem)");
	$sql= mysql_query("INSERT INTO MENSAGEM VALUES (02,'$assunto', 0, '$mensagem', '$destinatario',null,'$tipoMensagem')");


	if(!$sql){
		echo mysql_error();
	}else{
		echo "msg enviada";
	}

?>