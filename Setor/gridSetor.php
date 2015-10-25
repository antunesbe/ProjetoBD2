<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">

<title>Cadastro de Setores - Projeto BD-2 </title>

<!-- Arquivos CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="css/estilo.css">
<!-- Arquivos Javascript -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</head>
<body>
	<div class="container">
		<h2>Cadastro de Setores</h2>
		<br>
		<br>
		<div class="form-group">
			<button class = "pull-right"><a class="button glyphicon glyphicon-plus" href="create.php">Adicionar</a></button>
			<table class="table table-hover">
				<tbody>
					<tr onclick="location.href = 'login.php'" class="tabelaClicavel" >
						<td><input type="checkbox"</td>
						<td>ID</td>
						<td>Nome</td>
						<td>Descrição</td>
						<td>
							<button class = "glyphicon glyphicon-edit"></button>
							<button class = "glyphicon glyphicon-search"></button>
							<button class = "glyphicon glyphicon-remove"></button>
						</td>
					</tr>
					
				</tbody>
			</table>
		</div>

	</div>

</body>
</html>