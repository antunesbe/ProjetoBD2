<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">

<title>Cadastro de Usuarios - Projeto BD-2 </title>

<!-- Arquivos CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="css/estilo.css">
<!-- Arquivos Javascript -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</head>
<body>
	<div class="container">
		<h2>Cadastro de Usuarios</h2>
		<br>
		<div class "float-right">
			<a class="button glyphicon glyphicon-plus" href="create.php">Adicionar</a>
		</div>
		<div class="form-group col-md-10">
			<table class="table table-hover">
				<tbody>
					<tr onclick="location.href = 'login.php'" class="tabelaClicavel" >
						<td><input type="checkbox"</td>
						<td>Nome</td>
						<td>E-mail</td>
						<td>Data de Nascimento</td>
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