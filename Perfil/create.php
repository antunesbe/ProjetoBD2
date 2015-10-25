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
						<div class="form-group col-md-6">
							<label for="nome" class="label-control" id="labelNome">Nome:</label>
							<input type="text" class="form-control" name="nome" id="nome">
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-6">
							<label for="descricao" class="label-control" id="labelDescricao">Descrição:</label>
							<textarea class="form-control" rows="5" name="descricao" id="descricao"></textarea>
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