<?php
	session_start();
	include "../includes/conexaoBD.php";
	
		
		$idRemetente = $_GET['id'];

	/*if($_GET['go']=='alterarSetor'){

		$nome = $_POST['nome'];
		$desc = $_POST['descricao'];
		$pChave = $_POST['pessoaChave'];

		$alterar = mysql_query("UPDATE DEPARTAMENTO SET nome_depto='$nome', descricao_depto='$desc', pessoa_chave = (SELECT id_pessoa FROM USUARIO WHERE '$pChave'=email) WHERE '$idSetor' = id_departamento");
	}*/
	
	$sql = mysql_query("SELECT * FROM PERFIL WHERE '$idRemetente'=id_perfil");
	while($linha = mysql_fetch_array($sql)){
		$nomePerfil = $linha['nome_perfil'];
	}	
?>
	

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Pagina Inicial - Projeto BD-2 </title>

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
				<h2>Cadastrar Privilegio</h2>
				<form class="form form-vertical" method = "post" action = "cadastrarPrivilegio.php?go=salvarPrivilegio?id=<?php echo $idRemetente; ?>">
					<div class="row" style="border:none;">
						<div class="form-group col-md-3">
							<label for="destinatario" class="label-control" id="labelDestinatario">Perfil Remetente:</label>
							<input type = "text" class = "form-control" disabled value = "<?php echo $nomePerfil; ?>">
						</div>
					</div>
					<div class="row" style="border:none;">
						<div class="form-group col-md-3">
							<label for="destinatario" class="label-control" id="labelDestinatario">Perfil Destinatario:</label>
							<select class="form-control" name="destinatario" id="destinatario">
								<?php
									$consulta = mysql_query("SELECT * FROM PERFIL ORDER BY id_perfil");
									$row = mysql_num_rows($consulta);
									while($linha = mysql_fetch_assoc($consulta)){
										echo "<option id='" . $linha['id_perfil'] . "'>" . $linha['nome_perfil'] . "</option>"; 
									}
									if ($row<=0){
										echo "<option>Sem valor</option>";
									}
								?>
							</select>
						</div>
					</div>
					<div class="row" style="border:none;">
						<div class="form-group col-md-3">
							<label for="tipoMsg" class="label-control" id="labelTipoMsg">Tipo da Mensagem:</label>
							<select class="form-control" name="tipoMsg" id="tipoMsg">
								<?php
									$consulta = mysql_query("SELECT * FROM TIPO_MENSAGEM ORDER BY id_tipo_mensagem");
									$row = mysql_num_rows($consulta);
									while($linha = mysql_fetch_assoc($consulta)){
										echo "<option id='" . $linha['id_tipo_mensagem'] . "'>" . $linha['nome_tipo_msg'] . "</option>"; 
									}
									if ($row<=0){
										echo "<option>Sem valor</option>";
									}
								?>
							</select>
						</div>
					</div>
					<div class="row" style="border:none;">
						<div class="form-group col-md-3">
							<button type = "submit" class="btn btn-success" id="btnEnviar">Enviar</button>
							<button class="btn btn-default" id="btnLimpar">Limpar</button>
						</div>
					</div>
				</form>
				
				<div class="form-group">
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