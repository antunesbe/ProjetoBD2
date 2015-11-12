<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Login - Projeto BD-2 </title>

	<!-- Arquivos CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="css/menuTopoEstilo.css">
	<link rel="stylesheet" href="css/loginEstilo.css">

	<!-- Arquivos Javascript -->
	<script src="js/bootstrap.js"></script>
	<script src="js/jquery.js"></script>
</head>

<body>
	<!-- MENU SUPERIOR -->
	<nav class="navbav navbar-default menuSuperior">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" id="tituloTopo" href="#">Sistema de Comunicação Interno</a>
			</div>
		</div>
	</nav>

	<!-- /MENU SUPERIOR-->
	<!-- PRINCIPAL -->

	<div class="container-fluid principal">
		<div class="panel panel-primary">
			<div class="panel-heading" id="loginHeader">
				<div class="panel-title">Login</div>
			</div>
			
			<div class="panel-body">
				<form id="formLogin" class="form-horizontal" method="post" action="index.php">
					<div class="form-group">
						<input type="text" id="txtEmail" class="form-control" name="email" placeholder="E-Mail"/>
					</div>
					<div class="form-group">
						<input type="password" id="txtSenha" class="form-control" name="senha" placeholder="Senha"/>
					</div>
					<div class="form-group">
						<input type="submit" class="btn" name="btnLogin" id="btnLogin" value="Entrar"></input>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- /PRINCIPAL -->
	<!-- RODAPE -->
	<div class="container-fluid rodape">
		<footer class="row">
			<div class="col-md-4 conteudoRodape">

			</div>
			<div class="col-md-4 conteudoRodape">
				<p style="font-size:25px">Trabalho de Banco de Dados 2</p>
				<p style="font-size:20px">PUC-Campinas</p>
			</div>
			<div class="col-md-4 conteudoRodape">
				<p class="pull-right text-left"style="font-size:17px">Breno Antunes - 12021069 <br>Breno Bonassi - 120201069 <br>Danilo Freitas - 12021069 </p>
			</div>
		</footer>
	</div>
	<!-- /RODAPE -->
</body>
</html>