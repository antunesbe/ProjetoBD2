<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">

<title>Home - Projeto BD-2 </title>

<!-- Arquivos CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="css/estilo.css">
<!-- Arquivos Javascript -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</head>
<body>
	<div class="container">

		<h1><small>Bem vindo,</small>Breno Antunes</h1>
		<br>
		<p>Você tem __ mensagens não lidas.</p>
		<br><br>
		<p>Data: <?php echo date('d/m/Y');?> Hora: <?php echo gmdate('H:i');?></p>
	</div>

<?php
    $data = date('d-m-Y');
    $data .= ' '.date('H:i:s');
?>
</body>
</html>