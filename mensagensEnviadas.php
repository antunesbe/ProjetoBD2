<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">

<title>Mensagens Enviadas - Projeto BD-2 </title>

<!-- Arquivos CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="css/estilo.css">
<!-- Arquivos Javascript -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</head>
<body>
	<div class="container">
		<h2>Mesagens Enviadas</h2>
		<br>
		<table class="table table-hover">
			<tbody>
				<tr onclick="location.href = 'login.php'" class="tabelaClicavel" >
					<td><input type="checkbox"</td>
					<td>Destinatario</td>
					<td>Assunto</td>
					<td>Data</td>
				</tr>
				
			</tbody>
		</table>

	</div>

</body>
</html>