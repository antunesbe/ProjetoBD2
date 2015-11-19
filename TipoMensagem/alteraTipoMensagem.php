<?php
	session_start();
	include "../includes/conexaoBD.php";
	
	$idTipoMsg = $_GET['id'];
	
	if($_GET['go']=='alteraTipoMensagem'){
		
		$nome = $_POST['nome'];
		$desc = $_POST['descricao'];
		$alterar = mysql_query("UPDATE TIPO_MENSAGEM SET nome_tipo_msg='$nome', descricao_tipo_msg='$desc' WHERE '$idTipoMsg' = id_tipo_mensagem");
	}
	
	$sql = mysql_query("SELECT * FROM TIPO_MENSAGEM WHERE '$idTipoMsg'=id_tipo_mensagem");
	
	while($linha = mysql_fetch_array($sql)){
		$nomeMsg = $linha['nome_tipo_msg'];
		$descMsg = $linha['descricao_tipo_msg'];
	}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Cadastrar Tipo Mensagem - Projeto BD-2 </title>

	<!-- Arquivos CSS -->
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/estilo.css">
	<link rel="stylesheet" href="../css/menuTopoEstilo.css">
	<link rel="stylesheet" href="../css/menuLateralEstilo.css">
	<!-- Arquivos Javascript -->
	<script src="../js/bootstrap.js"></script>
	<script src="../js/jquery.js"></script>
</head>
<body>
	<!-- MENU SUPERIOR -->
	<nav class="navbav navbar-default menuSuperior">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" id="tituloTopo" href="../index.php">Sistema de Comunicação Interno</a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li><a id="opcaoMenuSuperior1" href="../perfil.php"><span class="glyphicon glyphicon-user"></span> Perfil</a></li>
				<li><a id="opcaoMenuSuperior2" href="../login.php"><span class="glyphicon glyphicon-log-out"></span> Sair</a></li>
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
							<a href="../index.php" id="opcaoMenuLateral0">HOME</a> 
						</li>
					    <li>
	                        <a href="../escreverMensagem.php" id="opcaoMenuLateral1">Escrever Mensagem <span class="glyphicon glyphicon-pencil pull-right icones"></span></a>
	                    </li>
	                    <li>
	                        <a href="../mensagensRecebidas.php" id="opcaoMenuLateral2">Caixa de Entrada <span class="badge pull-right">12</span></a>
	                    </li>
	                    <li>
	                        <a href="../mensagensEnviadas.php" id="opcaoMenuLateral3">Mensagens Enviadas <span class="glyphicon glyphicon-envelope pull-right icones"></span></a>
	                    </li>
	                    <li>
	                        <a href="../contatos.php" id="opcaoMenuLateral4">Contatos <span class="glyphicon glyphicon-list-alt pull-right icones"></span></a>
	                    </li>
	                    <li class="active">
	                        <a href="../administrar.php" id="opcaoMenuLateral5">Administrar <span class="glyphicon glyphicon-cog pull-right icones"></span></a>
	                    </li>
	                </ul>  
				</ul>
			</nav>
		<!-- /MENU LATERAL -->
		<!-- CONTEUDO -->
			<section class="col-md-10 conteudo">
			<br class="alertaTipo_mensagem hidden">
				<div class="alert alert-success hidden alertaTipo_mensagem">
					<span class="close" data-dismiss="alert">&times;</span>
					Tipo de mensagem editado com <strong>Sucesso</strong> !
				</div>
				<h2>Editar Tipo de Mensagem</h2>
				<form class="form form-vertical" method="POST" action="editarTipoMensagem.php?go=alteraTipoMensagem&id=<?php echo $IdTipoMsg; ?>">
				<form class="form form-vertical">
					<div class="row"  style="border:none;">
						<div class="form-group col-md-6">
							<label for="nome" class="label-control" id="labelNome">Nome:</label>
							<input type="text" class="form-control" name="nome" id="nome" value = "<?php echo $nomeMsg; ?>>
						</div>
					</div>
					<div class="row" style="border:none;">
						<div class="form-group col-md-6">
							<label for="descricao" class="label-control" id="labelDescricao">Descrição:</label>
							<textarea class="form-control" rows="5" name="descricao" id="descricao"><?php echo $descMsg; ?></textarea>
						</div>
					</div>
					<div class="row" style="border:none;">
						<div class="form-group col-md-3">
							<button class="btn btn-success" id="btnEnviar">Enviar</button>
							<button class="btn btn-default" id="btnLimpar">Limpar</button>
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
				<p style="font-size:25px">Trabalho de Banco de Dados 2</p>
				<p style="font-size:20px">PUC-Campinas</p>
			</div>
			<div class="col-md-4 conteudoRodape">
				<p class="pull-right text-left"style="font-size:17px">Breno Antunes - 12021069 <br>Breno Bonassi - 120201069 <br>Danilo Freitas - 12021069 </p>
			</div>
		</footer>
	</div>
</body>
</html>

<?php
if(isset($_GET['go'])){
	if($_GET['go']=='alteraTipoMensagem'){
			?>
			<script>
				$('.alertaTipoMensagem').removeClass("hidden");
			</script>

			<?php
		}
	}