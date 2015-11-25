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

	<title>Listar Perfil - Projeto BD-2 </title>

	<!-- Arquivos CSS -->
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/estilo.css">
	<link rel="stylesheet" href="../css/menuTopoEstilo.css">
	<link rel="stylesheet" href="../css/menuLateralEstilo.css">
	<!-- Arquivos Javascript -->
	<script src="../js/bootstrap.js"></script>
	<script src="../js/jquery.js"></script>
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
			<nav class="col-md-3 menuLateral">
				<ul class="nav nav-pulls nav-stacked">
						<li>
							<a href="../index.php" id="opcaoMenuLateral0">HOME</a> 
						</li>
					    <li>
	                        <a href="../escreverMensagem.php?&go=enviar" id="opcaoMenuLateral1">Escrever Mensagem <span class="glyphicon glyphicon-pencil pull-right icones"></span></a>
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
						<?php
	                    if ($_SESSION['nomePerfil']=="ADMIN")
						{
							echo "<li class = 'active'>";
							echo	"<a href='../administrar.php' id='opcaoMenuLateral5'>Administrar <span class='glyphicon glyphicon-cog pull-right icones'></span></a>";
							echo "</li>";
						}
						?>
	                </ul>  
				</ul>
			</nav>
		<!-- /MENU LATERAL -->
		<!-- CONTEUDO -->
			<section class="col-md-9 conteudo"><br class="alertaRemocao hidden">
				<h2>Perfis</h2>
				<br>
				<div class="form-group">
					<a class="btn btn-success pull-left" href="create.php"><span class="glyphicon glyphicon-plus"></span> Adicionar</a>
					<table class="table table-hover">
						<thead>
							<th>#</th>
							<th>Nome</th>
							<th>Descricao</th>
							<th>Ação</th>
						</thead>
						<tbody>
							<?php
								$page = $_GET['page'];
								if($page == "")
									$page1 = 0;
								else
									$page1 = ($page-1)*3;
								
								$sql = mysql_query("SELECT * FROM PERFIL ORDER BY id_perfil limit $page1,3");
								$numrows = mysql_num_rows($sql);
								if ($numrows<=0){
									echo "<td colspan='4'>Não existem Departamentos cadastrados !</td>";
								}else{
									while($linha = mysql_fetch_assoc($sql)){
										echo "<tr onclick='location.href = '../login.php'' class='tabelaClicavel' >";
										echo "<td>" . $linha['id_perfil'] . "</td>";
										echo "<td>" . $linha['nome_perfil'] . "</td>";
										echo "<td>" . $linha['descricao_perfil'] . "</td>";
										echo "<td>
												<a href = 'cadastrarPrivilegio.php?go=cadastrarPrivilegio&id=" .$linha['id_perfil']. "&page=1' title = 'Cadastrar Privilegio'><button class = 'glyphicon glyphicon-list' title = 'Cadastrar Privilegio'></button></a>
												<a href = 'edit.php?go=editarPerfil&id=" .$linha['id_perfil']. "' title = 'Cadastrar Privilegio'><button class = 'glyphicon glyphicon-edit' title = 'Editar'></button></a>
												<a href='delete.php?id='" . $linha['id_perfil'] . "' onclick='return confirmacao()'><button title = 'Remover' class = 'glyphicon glyphicon-remove' ></button></a>
											</td>";
										echo "</tr>";
									}
								}
							?>
							
						</tbody>
					</table>
					<?php
						$sql = mysql_query("SELECT * FROM PERFIL");
						$numrows = mysql_num_rows($sql);
								
						$a=$numrows/3;
						$a=ceil($a);
						echo "<br>";
						for ($i = $a; $i>=1; $i--)
						{
							?><a href = "gridPerfil.php?&page= <?php echo $i; ?>"><button class = "pull-right"> <?php echo $i; ?></button></a>
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
