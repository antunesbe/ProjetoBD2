<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">

<title>Perfil - Projeto BD-2 </title>

<!-- Arquivos CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="css/estilo.css">
<!-- Arquivos Javascript -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</head>
<body>
	<div class="container">

		<h2>Perfil</h2>
		<br>
		<a class="btn btn-default pull-right">Editar</a>
		<br>
		<fieldset>
			<legend class="tituloPerfil">Pessoal</legend>
			<p><span class="legendaPerfil">Nome: </span></p>
			<p><span class="legendaPerfil">CPF: </span></p>
			<p><span class="legendaPerfil">Data de nascimento: </span></p>
		</fieldset>
		<br>
		<fieldset>
			<legend class="tituloPerfil">Empresa</legend>
			<p><span class="legendaPerfil">ID: </span></p>
			<p><span class="legendaPerfil">Sua prioridade de sistema é: </span></p>
			<p><span class="legendaPerfil">Data de Vinculação: </span></p>
			<p><span class="legendaPerfil">Setor: </span></p>
		</fieldset>
		
	</div>


</body>