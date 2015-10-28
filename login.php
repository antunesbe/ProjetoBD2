<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">

<title>Login - Projeto BD-2 </title>

<!-- Arquivos CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="css/estilo.css">
<!-- Arquivos Javascript -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

</head>
<body>
<!-- MENU SUPERIOR -->
	<nav class="navbar navbar-default navbar-fixed-top" >
		<div class="container-fluid">
			<div class="navbar-header">
   				<a class="navbar-brand" href="#"id="navbar">Sistema de Comunicação Interna</a>
  			</div>

 		</div>
	</nav>
<br/><br/><br>
<!-- CORPO PRINCIPAL -->
	<div class="container">
		<div class="panel panel-primary" id="divLogin">
			<div class="panel-heading" id="loginHeader">
				<div class="panel-title" id="titleLogin">Login</div>
			</div>

		<div class="panel-body">
			<form id="formLogin" class="form-horizontal" method="post" action="index.php">
				<div class="form-group">
					<input type="text" id="txtLogin" class="form-control" name="login" placeholder="Usuário"/>
				</div>
				<div class="form-group">
					<input type="password" id="txtPassword" class="form-control" name="senha" placeholder="Senha"/>
				</div>
				<div class="form-group" id="btnGroupLogin">
					<input type="submit" class="btn btn-primary" name="btnLogin" value="Entrar"></input>
				</div>
			</form>
		</div>
	</div>
	</div>

</body>

</html>