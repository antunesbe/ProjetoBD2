<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">

<title>Usuario - Projeto BD-2 </title>

<!-- Arquivos CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="css/estilo.css">
<!-- Arquivos Javascript -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</head>
<body>
	<div class="container">
		<h2>Cadastrar Usuario </h2>
		<form class="form form-vertical">
			<div class="row">
				<div class="form-group col-md-6">
				<label for="nome" class="label-control" id="labelNome">Nome:</label>
					<input type = "text" class="form-control" name="nome" id="nome">
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-3">
				<label for="data_nasc" class="label-control" id="labelData">Data de Nascimento:</label>
					<input class="form-control" type = "date" name="data_nasc" id="data_nasc">
				</div>
				<div class="form-group col-md-3">
					<label for="email" class="label-control" id="labelEmail">Email:</label>
					<input type="email" class="form-control email" name="email" id="assunto">
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-3">
				<label for="senha" class="label-control" id="labelSenha">Senha:</label>
					<input class="form-control" type = "password" name="senha" id="senha">
				</div>
				<div class="form-group col-md-3">
					<label for="conf-Senha" class="label-control" id="labelConfSenha">Confirmar Senha:</label>
					<input type="password" class="form-control" name="conf-Senha" id="conf-Senha">
				</div>
			</div>
			
		
		<div class="row">
			<div class="form-group col-md-3">
				<label for="perfil" class="label-control" id="labelPerfil">Perfil:</label>
				<select class="form-control" name="perfil" id="perfil">
					<option></option>
					<option>Funcionário</option>
				</select>
			</div>
			<div class="form-group col-md-3">
				<label for="setor" class="label-control" id="labelSetor">Setor:</label>
				<select class="form-control" name="setor" id="setor">
					<option></option>
					<option>Contas a receber</option>
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
	</div>

		

	</div>


</body>
</html>