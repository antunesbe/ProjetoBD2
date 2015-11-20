<?php
	session_start();
	include "../includes/conexaoBD.php";

	$idRemetente = $_GET['id'];

	if(isset($_GET['go'])){
		if($_GET['go']=='salvarPrivilegio'){
			$destinatario = $_POST['destinatario'];
			$tipoMsg = $_POST['tipoMsg'];
			$sql= mysql_query("INSERT INTO PRIVILEGIO VALUES (null, (SELECT id_perfil FROM PERFIL WHERE '$idRemetente'=id_perfil), (SELECT id_perfil FROM PERFIL WHERE '$destinatario'=nome_perfil),(SELECT id_tipo_mensagem FROM TIPO_MENSAGEM WHERE '$tipoMsg'=nome_tipo_msg))") or die(mysql_error());
		}
	}
	$sql = mysql_query("SELECT * FROM PERFIL WHERE '$idRemetente'=id_perfil");
	
	while($linha = mysql_fetch_array($sql)){
		$nomePerfil = $linha['nome_perfil'];
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

	<title>Cadastrar Privilégio - Projeto BD-2 </title>

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
			<br class="alertaCadastro hidden">
				<div class="alert alert-success hidden alertaCadastro">
					<span class="close" data-dismiss="alert">&times;</span>
					Cadastro realizado com <strong>Sucesso</strong> !
				</div>
				<div class="alert alert-danger alertaRemocao hidden">
					<span class="close" data-dismiss="alert">&times;</span>
					Perfil deletado com <strong>Sucesso</strong> !
				</div>
				<h2>Cadastrar Privilegio</h2>
				<form class="form form-vertical" method = "post" action = "cadastrarPrivilegio.php?go=salvarPrivilegio&id=<?php echo $idRemetente; ?>&page=1">
					<div class="row" style="border:none;">
						<div class="form-group col-md-3">
							<label for="destinatario" class="label-control" id="labelDestinatario">Perfil Remetente:</label>
							<input type = "text" class = "form-control" disabled value = "<?php echo $nomePerfil; ?>">
						</div>
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
							<button class="btn btn-success" id="btnEnviar">Enviar</button>
							<button class="btn btn-default" id="btnLimpar">Limpar</button>
						</div>
					</div>
				</form>
				
				<div class="form-group">
					<table class="table table-hover">
						<thead>
								<td><b>ID</td>
								<td><b>Perfil Remetente</td>
								<td><b>Perfil Destinatario</td>
								<td><b>Tipo Mensagem</td>
								<td><b>Opções</td>
							</tr>
						</thead>
						<tbody>
							<?php
								$page = $_GET['page'];
								if($page == "")
									$page1 = 0;
								else
									$page1 = ($page-1)*3;
								
								
								$sql = mysql_query("SELECT PR.id_privilegio as privilegio, P1.nome_perfil as remetente, P2.nome_perfil as destinatario, TP.nome_tipo_msg as tipo_msg
													FROM PRIVILEGIO PR
													INNER JOIN PERFIL P1 ON PR.perfil_remetente = P1.id_perfil
													INNER JOIN PERFIL P2 ON PR.perfil_destinatario = P2.id_perfil
													INNER JOIN TIPO_MENSAGEM TP ON PR.priv_tipo_mensagem = TP.id_tipo_mensagem
													WHERE PR.perfil_remetente = '$idRemetente	'
													ORDER BY id_privilegio limit $page1,3");
													
								$numrows = mysql_num_rows($sql);
								if ($numrows<=0){
									echo "<td colspan='6'>Não existem usuários cadastrados !</td>";
								}else{
									while($linha = mysql_fetch_assoc($sql)){
										echo "<tr onclick='location.href = '../login.php'' class='tabelaClicavel' >";
										echo "<td>" . $linha['privilegio'] . "</td>";
										echo "<td>" . $linha['remetente'] . "</td>";
										echo "<td>" . $linha['destinatario'] . "</td>";
										echo "<td>" . $linha['tipo_msg'] . "</td>";
										echo "<td>
												<a href='deletePrivilegio.php?id=" . $linha['privilegio'] . "&idRemetente=". $linha['remetente'] ."' onclick='return confirmacao()'><button title = 'Remover' class = 'glyphicon glyphicon-remove' ></button></a>
											</td>";
										echo "</tr>";
									}
								}
							?>
						
					</tbody>
					</table>
					<?php
						$sql = mysql_query("SELECT * FROM PRIVILEGIO");
						$numrows = mysql_num_rows($sql);
								
						$a=$numrows/3;
						$a=ceil($a);
						for ($i = $a; $i>=1; $i--)
						{
							?><a href = "cadastrarPrivilegio.php?go=cadastrarPrivilegio&id=<?php echo $idRemetente; ?>&page= <?php echo $i; ?>"><button class = "pull-right"> <?php echo $i; ?></button></a>
							<?php
						}
					?>
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

<?php
	if(isset($_GET['go'])){
		if($_GET['go']=='salvarPrivilegio'){
			?>
			<script>
				$('.alertaCadastro').removeClass("hidden");
			</script>

			<?php
		}

	}
	if(isset($_GET['sit'])){
		if($_GET['sit']=='privilegioDeletado'){
			?>
			<script>
				$('.alertaRemocao').removeClass("hidden");
			</script>
			<?php
		}
	}
?>