<?php
	session_start();
	include "../includes/conexaoBD.php";
	
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

	<title>Listar Usuário - Projeto BD-2 </title>

	<!-- Arquivos CSS -->
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/estilo.css">
	<link rel="stylesheet" href="../css/menuTopoEstilo.css">
	<link rel="stylesheet" href="../css/menuLateralEstilo.css">
	<!-- Arquivos Javascript -->
	<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
</head>
<script>
	function confirmacao(){
		if(confirm("Deseja excluir este item?")){
			return true;
		}else{
			return false;
		}
	}

</script>
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
							echo "<li class = 'active'>";
							echo	"<a href='administrar.php' id='opcaoMenuLateral5'>Administrar <span class='glyphicon glyphicon-cog pull-right icones'></span></a>";
							echo "</li>";
						}
						?>
	                </ul>  
				</ul>
			</nav>
		<!-- /MENU LATERAL -->
		<!-- CONTEUDO -->
			<section class="col-md-10 conteudo">
				<br class="alertaRemocao hidden">
				<div class="alert alert-danger alertaRemocao hidden">
					<span class="close" data-dismiss="alert">&times;</span>
					Usuário deletado com <strong>Sucesso</strong> !
				</div>
				<h2>Usuários</h2>

				<div class="form-group">
					<a class="btn btn-success pull-left" href="createUsuario.php"><span class="glyphicon glyphicon-plus"></span>Adicionar</a>
					<table class="table table-hover">
						<thead>
							<th>#</th>
							<th>Nome</th>
							<th>E-Mail</th>
							<th>Data Nascimento</th>
							<th>CPF</th>
							<th>Ação</th>
						</thead>
						<tbody>
								<?php
									$sql = mysql_query("SELECT * FROM USUARIO ORDER BY id_pessoa");
									$numrows = mysql_num_rows($sql);
									if ($numrows<=0){
										echo "<td colspan='6'>Não existem usuários cadastrados !</td>";
									}else{
										while($linha = mysql_fetch_assoc($sql)){
											echo "<tr onclick='location.href = '../login.php'' class='tabelaClicavel' >";
											echo "<td>" . $linha['id_pessoa'] . "</td>";
											echo "<td>" . $linha['nome'] . "</td>";
											echo "<td>" . $linha['email'] . "</td>";
											echo "<td>" . $linha['data_nascimento'] . "</td>";
											echo "<td>" . $linha['cpf'] . "</td>";
											echo "<td>
													<button><a href='editarUsuario.php?go=editaUsuario&id=" . $linha['id_pessoa'] . "'><span class = 'glyphicon glyphicon-edit'></span></a></button>
													<button><a href='#'><span class = 'glyphicon glyphicon-search'></span></a></button>
													<button><a href='deletarUsuario.php?id=" . $linha['id_pessoa'] . "' onclick='return confirmacao()'><span class = 'glyphicon glyphicon-remove'></span></a></button>
												</td>";
											echo "</tr>";
										}
									}
								?>
							
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

	if(isset($_GET['sit'])){
		if($_GET['sit']=='usuarioDeletado'){
			?>
			<script>
				$('.alertaRemocao').removeClass("hidden");
			</script>
			<?php
		}
	}

?>