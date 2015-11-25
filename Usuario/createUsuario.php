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

	<title>Cadastrar Usuário - Projeto BD-2 </title>

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
			<section class="col-md-9 conteudo">
				<br class="alertaCadastro hidden">
				<div class="alert alert-success hidden alertaCadastro">
					<span class="close" data-dismiss="alert">&times;</span>
					Cadastro realizado com <strong>Sucesso</strong> !
				</div>
				<h2>Cadastrar Usuario </h2>
					<form class="form form-vertical" method="POST" action="?go=cadastraFuncionario">
						<div class="row">
							<div class="col-md-6">
								<h3>Dados do Funcionário</h3>
								<div class="row" style="border:none;">
									<div class="form-group col-md-12">
										<label for="nome" class="label-control" id="labelNome">Nome:</label>
										<input type = "text" class="form-control" name="nome" id="nome">
									</div>
								</div>
								<div class="row" style="border:none;">
									<div class="form-group col-md-6">
									<label for="data_nasc" class="label-control" id="labelData">Data de Nascimento:</label>
										<input class="form-control" type = "date" name="data_nasc" id="data_nasc">
									</div>
									<div class="form-group col-md-6">
										<label for="cpf" class="label-control" id="labelCpf">CPF:</label>
										<input type="cpf" class="form-control" name="cpf" id="cpf">
									</div>
								</div>
								<div class="row" style="border:none;">
									<div class="form-group col-md-6">
										<label for="perfil" class="label-control" id="labelPerfil">Perfil:</label>
										<select class="form-control" name="perfil" id="perfil">
											<option></option>
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
									<div class="form-group col-md-6">
										<label for="setor" class="label-control" id="labelDepto">Departamento:</label>
										<select class="form-control" name="departamento" id="departamento">
											<option></option>
											<?php
												$consulta = mysql_query("SELECT * FROM DEPARTAMENTO ORDER BY id_departamento");
				    							$row = mysql_num_rows($consulta);
												while($linha = mysql_fetch_assoc($consulta)){
													echo "<option id='" . $linha['id_departamento'] . "'>" . $linha['nome_depto'] . "</option>"; 
												}
												if ($row<=0){
													echo "<option>Sem valor</option>";
												}
											?>
										</select>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<h3>Dados de Acesso</h3>
								<div class="row" style="border:none">
									<div class="form-group col-md-12">
										<label for="email" class="label-control" id="labelEmail">Email:</label>
										<input type="email" class="form-control email" name="email" id="email">
									</div>
								</div>

								<div class="row" style="border:none;">
									<div class="form-group col-md-6">
										<label for="senha" class="label-control" id="labelSenha">Senha:</label>
										<input class="form-control" type = "password" name="senha" id="senha">
									</div>
									<div class="form-group col-md-6">
										<label for="conf-Senha" class="label-control" id="labelConfSenha">Confirmar Senha:</label>
										<input type="password" class="form-control" name="conf-Senha" id="conf-Senha">
									</div>
								</div>
						
					
							</div>
						
						</div>
						<div class="row" style="border:none;">
							<div class="col-md-5">
							</div>
							<div class="form-group col-md-3">
								<button class="btn btn-success" id="btnEnviar">Enviar</button>
								<button class="btn btn-default" id="btnLimpar">Limpar</button>
							</div>
						</div>
					</form>
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
	if($_GET['go']=='cadastraFuncionario'){
		$nome = $_POST['nome'];
		$data_nasc = $_POST['data_nasc'];
		$cpf = $_POST['cpf'];
		$perfil = $_POST['perfil'];
		$depto = $_POST['departamento'];
		$email = $_POST['email'];
		$senha = $_POST['senha'];

		if(empty($nome)){
			echo "<script>alert(Preencha todos os dados !);</script>";
			echo "oi";
		}else{

			$sql= mysql_query("INSERT INTO USUARIO VALUES (null,'$nome','$cpf','$data_nasc','$email','$senha', (SELECT id_departamento FROM DEPARTAMENTO WHERE '$depto'=nome_depto),(SELECT id_perfil FROM PERFIL WHERE '$perfil'=nome_perfil))");


			if(!$sql){
				echo mysql_error();
			}else{
				?>
				<script>
					$('.alertaCadastro').removeClass("hidden");
				</script>

				<?php
			}
		}
	}
}
?>