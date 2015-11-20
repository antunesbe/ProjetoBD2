<?php
	session_start();
	include "../includes/conexaoBD.php";
	
	$idTipoMsg = $_GET['id'];

	if($_GET['go']=='alterarTipoMsg'){

		$nome = $_POST['nome'];
		$desc = $_POST['descricao'];
		$alterar = mysql_query("UPDATE TIPO_MENSAGEM SET nome_tipo_msg='$nome', descricao_tipo_msg='$desc' WHERE '$idTipoMsg' = id_tipo_mensagem");
	}
	
	$sql = mysql_query("SELECT * FROM TIPO_MENSAGEM WHERE '$idTipoMsg'=id_tipo_mensagem");

	while($linha = mysql_fetch_array($sql)){
		$nomeTipoMsg = $linha['nome_tipo_msg'];
		$descTipoMsg = $linha['descricao_tipo_msg'];
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

	<title>Editar Tipo Mensagem - Projeto BD-2 </title>

	<!-- Arquivos CSS -->
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/estilo.css">
	<link rel="stylesheet" href="../css/menuTopoEstilo.css">
	<link rel="stylesheet" href="../css/menuLateralEstilo.css">
	<!-- Arquivos Javascript -->
	<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
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
	                        <a href="../mensagensRecebidas.php" id="opcaoMenuLateral2">Caixa de Entrada <span class="badge pull-right"><?php echo $msgsNaoLidas; ?></span></a>
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
				<br class="alertaEdicao hidden">
				<div class="alert alert-success hidden alertaEdicao">
					<span class="close" data-dismiss="alert">&times;</span>
					O Tipo Mensagem foi editado com <strong>Sucesso</strong> !
				</div>
				<h2>Cadastrar Tipo Mensagem</h2>
				<form class="form form-vertical" method="post" action="?go=alterarTipoMsg&id=<?php echo $idTipoMsg; ?>">
					<div class="row" style="border:none;">
						<div class="form-group col-md-6">
							<label for="nome" class="label-control" id="labelNome">Nome:</label>
							<input type="text" class="form-control" name="nome" id="nome" value = "<?php echo $nomeTipoMsg; ?>">
						</div>
					</div>
					<div class="row" style="border:none;">
						<div class="form-group col-md-6">
							<label for="descricao" class="label-control" id="labelDescricao">Descrição:</label>
							<textarea class="form-control" rows="5" name="descricao" id="descricao"><?php echo $descTipoMsg; ?></textarea>
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
				<p style="font-size:20px">Trabalho de Banco de Dados 2</p>
				<p style="font-size:15px">PUC-Campinas</p>
			</div>
			<div class="col-md-4 conteudoRodape">
				<p class="pull-right text-left"style="font-size:15px">Breno Antunes - 12021069 <br>Breno Bonassi - 12118501 <br>Danilo Freitas - 12647111 </p>
			</div>
		</footer>
	</div>
	</div>
</body>
</html>

<?php
if(isset($_GET['go'])){
	if($_GET['go'] == 'alterarTipoMsg'){
			?>
			<script>
				$('.alertaEdicao').removeClass("hidden");
			</script>

			<?php
		}
	}
?>
