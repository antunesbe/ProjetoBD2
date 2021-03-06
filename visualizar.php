<?php
	session_start();
	include "includes/conexaoBD.php";

	if(isset($_GET['id'])){
		$idMsg = $_GET['id'];
		$pegaMsg = mysql_query("SELECT * FROM MENSAGEM WHERE id_mensagem='$idMsg'");
		$msgInfo = mysql_fetch_assoc($pegaMsg);
		$remetente = $msgInfo['remetente'];
		$pegaRemetente = mysql_query("SELECT * FROM USUARIO WHERE id_pessoa='$remetente'");
		$pegaRemetente = mysql_fetch_assoc($pegaRemetente);
		$remetente = $pegaRemetente['email'];

	}

	if(isset($_GET['go'])){
		if($_GET['go']=='MarcarNaoLida'){
			mysql_query("UPDATE MENSAGEM SET lida=0 WHERE id_mensagem='$idMsg'");
		}elseif($_GET['go']=='verMsg'){
			mysql_query("UPDATE MENSAGEM SET lida=1 WHERE id_mensagem='$idMsg'");
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
			<nav class="col-md-3 menuLateral">
				<ul class="nav nav-pulls nav-stacked">
						<li>
							<a href="index.php" id="opcaoMenuLateral0">HOME</a> 
						</li>
					    <li>
	                        <a href="escreverMensagem.php?&go=enviar" id="opcaoMenuLateral1">Escrever Mensagem <span class="glyphicon glyphicon-pencil pull-right icones"></span></a>
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
						<?php
	                    if ($_SESSION['nomePerfil']=="ADMIN")
						{
							echo "<li>";
							echo	"<a href='administrar.php' id='opcaoMenuLateral5'>Administrar <span class='glyphicon glyphicon-cog pull-right icones'></span></a>";
							echo "</li>";
						}
						?>
	                </ul>  
				</ul>
			</nav>
		<!-- /MENU LATERAL -->
		<!-- CONTEUDO -->
			<section class="col-md-9 conteudo">
				<h2>Visualizar Mensagem</h2>
				<br>
				<form class="form form-horizontal">
				<div class="row">
					<div class="col-md-10">
						<div class="btn-group pull-right">
						    <button class="btn btn-default" type="button" id="btnEsquerda"><a href="#">Responder</a></button>
						    <?php
<<<<<<< HEAD
=======
						    
								if(isset($_GET['go'])){
									if($_GET['go']!='MarcarNaoLida'){
							echo "<a href='escreverMensagem.php?&go=responder&id=". $idMsg ."'><button class='btn btn-default' type='button' id='btnEsquerda'>Responder</button></a>";
											
						    
>>>>>>> origin/master

										?>
									    <button class="btn btn-default" id="btnDireita"><a href="visualizar.php?go=MarcarNaoLida&id=<?php echo $idMsg;?>">Marcar como não lida</a></button>
							<?php
									}
								}
							?>
						</div>
					</div>
				</div>
					<div class="row">
						<div class="col-md-9">
							<label for="remetente" class="label-control">Remetente:</label>
							<p  name="txtRemetente"id="txtRemetente" disabled><?php echo $remetente;?></p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-9">
							<label for="remetente" class="label-control">Assunto:</label>
							<p id="txtAssunto" name="txtRemetente" disabled><?php echo $msgInfo['assunto'];?></input>
						</div>
					</div>
					<div class="row">
						<div class=" col-md-10">
							<label for="mensagem" class="label-control">Mensagem:</label>
							<textarea class="form-control" id="txtMensagem" style="height:200px;"name="txtMensagem" disabled><?php echo $msgInfo['conteudo'];?></textarea>
						</div>
					</div>
				</form>
				
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