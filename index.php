<?php
	session_start();
	include "includes/conexaoBD.php";
	
	$USUARIO;
	$SENHA;
    if(!$_POST){
    	if(!$_SESSION){
    	echo "<script>
    			alert('É necessario fazer login para acessar essa pagina.');
    			window.location.href='login.php';
    		</script>";
    		}
    }else{
		$EMAIL = $_POST["email"];
    	$SENHA = $_POST["senha"];

    	$consulta = mysql_query("SELECT * FROM USUARIO WHERE email = '$EMAIL' AND senha='$SENHA'");
    	if(mysql_num_rows($consulta)<=0){
    		echo "<script>
    			alert('E-Mail e/ou Senha estão errados. Tente Novamente');
    			window.location.href='login.php';
    			</script>";
    	}else{
  			$resultado = mysql_fetch_assoc($consulta);
    		$_SESSION['nome'] = $resultado['nome'];
    		$_SESSION['id'] = $resultado['id_pessoa'];
    		$_SESSION['cpf'] = $resultado['cpf'];
    		$_SESSION['data_nasc'] = $resultado['data_nascimento'];
    		$_SESSION['email'] = $resultado['email'];
			$_SESSION['departamento'] = $resultado['departamento'];
			$_SESSION['perfil'] = $resultado['perfil'];
    	}

    }
    /*PEGAR MENSAGENS NAO LIDAS*/
  		$idUsuario = $_SESSION['id'];
		$consultaMsg = mysql_query("SELECT * FROM MENSAGEM WHERE destinatario='$idUsuario' AND lida = 0") or die(mysql_error());
		$msgsNaoLidas = mysql_num_rows($consultaMsg);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Pagina Inicial - Projeto BD-2 </title>

	<!-- Arquivos CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="css/menuTopoEstilo.css">
	<link rel="stylesheet" href="css/menuLateralEstilo.css">
	<!-- Arquivos Javascript -->
	<script src="js/bootstrap.js"></script>
	<script src="js/jquery.js"></script>
</head>
<body>
	<!-- MENU SUPERIOR -->
	<nav class="navbav navbar-default menuSuperior">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" id="tituloTopo" href="index.php">Sistema de Comunicação Interno</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li><a id="opcaoMenuSuperior1" href="perfil.php"><span class="glyphicon glyphicon-user"></span> Perfil</a></li>
				<li><a id="opcaoMenuSuperior2" href="includes/sair.php"><span class="glyphicon glyphicon-log-out"></span> Sair</a></li>
			</ul>
		</div>
	</nav>
	<!-- /MENU SUPERIOR-->
	<div class="container-fluid principal">
		<div class="row linhaPrincipal"> 
		<!-- MENU LATERAL -->
			<nav class="col-md-2 menuLateral">
				<ul class="nav nav-pulls nav-stacked">
						<li>
							<a href="index.php" id="opcaoMenuLateral0">HOME</a> 
						</li>
					    <li>
	                        <a href="escreverMensagem.php" id="opcaoMenuLateral1">Escrever Mensagem <span class="glyphicon glyphicon-pencil pull-right icones"></span></a>
	                    </li>
	                    <li>
	                        <a href="mensagensRecebidas.php" id="opcaoMenuLateral2">Caixa de Entrada <span class="badge pull-right"><?php echo $msgsNaoLidas; ?></span></a>
	                    </li>
	                    <li>
	                        <a href="mensagensEnviadas.php" id="opcaoMenuLateral3">Mensagens Enviadas <span class="glyphicon glyphicon-envelope pull-right icones"></span></a>
	                    </li>
	                    <li>
	                        <a href="contatos.php" id="opcaoMenuLateral4">Contatos <span class="glyphicon glyphicon-list-alt pull-right icones"></span></a>
	                    </li>
	                    <li>
	                        <a href="administrar.php" id="opcaoMenuLateral5">Administrar <span class="glyphicon glyphicon-cog pull-right icones"></span></a>
	                    </li>
	                </ul>  
				</ul>
			</nav>
		<!-- /MENU LATERAL -->
		<!-- CONTEUDO -->
			<section class="col-md-10 conteudo">
				<h2><small>Bem vindo,</small> <?php echo $_SESSION['nome'];?></h2>
                <br>

                <p>Você tem <?php echo $msgsNaoLidas; ?> mensagem(ns) não lida(s).</p>
                <br><br>
                <p>Data: <?php echo date('d/m/Y');?> Hora: <?php echo gmdate('H:i');?></p>

			</section>
			<!-- /CONTEUDO -->
		</div>	
	</div>
	<div class="container-fluid rodape">
		<footer class="row">
			<div class="col-md-4 conteudoRodape">

			</div>
			<div class="col-md-4 conteudoRodape">
				<p style="font-size:20px">Trabalho de Banco de Dados 2</p>
				<p style="font-size:15px">PUC-Campinas</p>
			</div>
			<div class="col-md-4 conteudoRodape">
				<p class="pull-right text-left"style="font-size:15px">Breno Antunes - 12021069 <br>Breno Bonassi - 12118501 <br>Danilo Freitas - 12647111 </p>
			</div>
		</footer>
	</div>
</body>
</html>