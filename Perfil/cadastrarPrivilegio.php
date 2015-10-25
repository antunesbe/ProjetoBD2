<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">

<title>Cadastro de Perfil - Projeto BD-2 </title>

<!-- Arquivos CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="css/estilo.css">
<!-- Arquivos Javascript -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</head>
<body>
	<div class="container">
		<h2>Cadastrar Perfil</h2>
		<form class="form form-vertical">
			<div class="row">
				<div class="form-group col-md-3">
					<label for="destinatario" class="label-control" id="labelDestinatario">Destinatario:</label>
					<select class="form-control" name="destinatario" id="destinatario">
						<option></option>
						<option>Contas a receber</option>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-3">
					<label for="tipoMsg" class="label-control" id="labelTipoMsg">Tipo da Mensagem:</label>
					<select class="form-control" name="tipoMsg" id="tipoMsg">
						<option></option>
						<option>Aviso</option>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-3">
					<button class="btn btn-success" id="btnEnviar">Enviar</button>
					<button class="btn btn-default" id="btnLimpar">Limpar</button>
				</div>
			</div>
		</form>
		
		<div class="form-group">
			<button class = "pull-right"><a class="button glyphicon glyphicon-plus" href="create.php">Adicionar</a></button>
			<table class="table table-hover">
				<tbody>
					<tr onclick="location.href = 'login.php'" class="tabelaClicavel" >
						<td><input type="checkbox"</td>
						<td>Perfil Remetente</td>
						<td>Tipo Mensagem</td>
						<td>Perfil Destinatario</td>
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

		

	</div>


</body>
</html>