<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">

<title>Login - Projeto BD-2 </title>


<!-- Arquivos CSS -->
<link rel="stylesheet" href="css/loginEstilo.css">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/menuTopoEstilo.css">
<link rel="stylesheet" href="css/footerEstilo.css">
<!-- Arquivos Javascript -->
<script src="js/scripts.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.js"></script>
</head>
<body>
<!-- MENU SUPERIOR -->
	<?php
		include "includes/menuSuperior.php";
	?>
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
						<input type="submit" class="btn" name="btnLogin" id="btnLogin" value="Entrar"></input>
					</div>
				</form>
			</div>
		</div><!--panel-->
	</div><!--/container-->

	<?php
		include "includes/footer.php";
	?>
</body>

</html>