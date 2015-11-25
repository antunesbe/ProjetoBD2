<?php
	session_start();
	include "includes/conexaoBD.php";
	
		$departamentoUsu = $_SESSION['departamento'];
		$perfil = $_SESSION['perfil'];
		$remetente = $_SESSION['id'];
		$destinatario = 0;
		$departamento = 0;
		$assunto = "";
	if(isset($_GET['go'])){
		if($_GET['go'] == 'enviaMsg'){
			$departamento = $_POST['departamento'];
			if ($departamentoUsu != $departamento)
			{
				$consultaDestinatario = mysql_query("SELECT * FROM DEPARTAMENTO WHERE id_departamento='$departamento'") or die(mysql_error());
				$consultaDestinatario = mysql_fetch_assoc($consultaDestinatario);
				$destinatario = $consultaDestinatario['pessoa_chave'];
			}
			else 
			{
				$destinatario = $_POST['destinatario'];
			}
			$tipoMensagem = $_POST['tipoMsg'];
			$assunto = $_POST['assunto'];
			$conteudo = $_POST['conteudo'];
			$remetente = $_SESSION['id'];

			$sql= mysql_query("INSERT INTO MENSAGEM VALUES (null,'$assunto', '$conteudo', 0, '$remetente',(SELECT id_pessoa FROM USUARIO WHERE id_pessoa='$destinatario'), 
								(SELECT id_tipo_mensagem FROM TIPO_MENSAGEM WHERE id_tipo_mensagem = '$tipoMensagem'))") or die(mysql_error());
			
			$destinatario = 0;
		}
		if($_GET['go'] == 'selectTipo'){
			$destinatario = $_GET['destinatario'];
			$remetente = $_SESSION['id'];
		}
		if($_GET['go'] == 'contato'){
			$destinatario = $_GET['destinatario'];
			$remetente = $_SESSION['id'];
			
		}
		if($_GET['go'] == 'responder'){
			$id = $_GET['id'];
			$remetente = $_SESSION['id'];
			$sql = mysql_query("SELECT * FROM MENSAGEM WHERE id_mensagem = '$id'");
			$resultado = mysql_fetch_array($sql);
			$destinatario = $resultado['remetente'];
			$assunto = $resultado['assunto'];
			$sql = mysql_query("SELECT * FROM USUARIO WHERE id_pessoa = '$destinatario'");
			$resultado = mysql_fetch_array($sql);
			$departamento = $resultado['departamento'];
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

	<title>Escrever Mensagem - Projeto BD-2 </title>

	<!-- Arquivos CSS -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="css/menuTopoEstilo.css">
	<link rel="stylesheet" href="css/menuLateralEstilo.css">
	<!-- Arquivos Javascript -->
	<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
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
				<li><a id="opcaoMenuSuperior2" href="login.php"><span class="glyphicon glyphicon-log-out"></span> Sair</a></li>
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
					    <li class="active">
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
		<?php
		?>
			<section class="col-md-9 conteudo">
				<br class="alertaMensagem hidden">
				<div class="alert alert-success hidden alertaMensagem">
					<span class="close" data-dismiss="alert">&times;</span>
					Mensagem enviada com <strong>Sucesso</strong> !
				</div>
				<h2>Escrever Mensagem</h2>
				<form class="form form-vertical" method="post" action="escreverMensagem.php?go=enviaMsg">
					<div class="row" style="border:none;">
						<!-- DESTINATARIO -->
						<div class="form-group col-md-3">
							<label for="departamento" class="label-control" id="labelDepartamento">Departamento:</label>
							<select class="form-control" name="departamento" id="departamento">
								<option value = "">...Selecione</option>
								<?php
									$consulta = mysql_query("SELECT * FROM DEPARTAMENTO ORDER BY id_departamento");
	    							$row = mysql_num_rows($consulta);
									while($linha = mysql_fetch_assoc($consulta)){
										echo "<option value='" . $linha['id_departamento'] . "'>" . $linha['nome_depto'] . "</option>"; 
									}
									if ($row<=0){
										echo "<option>Sem valor</option>";
									}
								?>
							</select>
						</div>
							
						<div class="form-group col-md-3">
							<label for="destinatario" class="label-control hidden"  id="labelDestinatario">Destinatario:</label>
							<select class="form-control hidden" name="destinatario" id="destinatario">
								<option value = "">...Selecione</option>
								<?php
									$consulta = mysql_query("SELECT * FROM USUARIO WHERE '$departamentoUsu' = departamento AND '$remetente' <> id_pessoa ORDER BY nome");
	    							$row = mysql_num_rows($consulta);
									$i=1;
									while($linha = mysql_fetch_assoc($consulta)){
										echo "<option value='" . $linha['id_pessoa'] . "'>" . $linha['nome'] . "</option>"; 
									}
									if ($row<=0){
										echo "<option>Sem valor</option>";
									}
								?>
							</select>
						</div>
						<!-- /DESTINATARIO -->
					</div>
					<div class="row" style="border:none;">
						<!-- TIPO MENSAGEM -->
						<div class="form-group col-md-3">
							<label for="tipoMsg" class="label-control" id="labelTipoMsg">Tipo da Mensagem:</label>
							<select class="form-control" name="tipoMsg" id="tipoMsg" disabled>
								<?php
										
											
										if ($departamento != $departamentoUsu)
											$consulta = mysql_query("SELECT *
																	FROM TIPO_MENSAGEM
																	ORDER BY nome_tipo_msg;");																	
										
										if ($destinatario != 0 && ($departamento == 0 || $departamento == $departamentoUsu))
										{
											$consulta = mysql_query("SELECT *
																	FROM TIPO_MENSAGEM TP
																	WHERE TP.id_tipo_mensagem in (
																		SELECT PV.priv_tipo_mensagem 
																		FROM PRIVILEGIO PV
																		INNER JOIN USUARIO RE ON RE.perfil = PV.perfil_remetente
																		INNER JOIN USUARIO DE ON DE.perfil = PV.perfil_destinatario
																		WHERE RE.id_pessoa =  '$remetente'
																		AND DE.id_pessoa = '$destinatario'
																		)
																	ORDER BY TP.nome_tipo_msg;");
										}
										$row = mysql_num_rows($consulta);
										if ($row>0)
										{
											echo "<option value = ''>...Selecione</option>";
											while($linha = mysql_fetch_assoc($consulta)){
												echo "<option value='" . $linha['id_tipo_mensagem'] . "'>" . $linha['nome_tipo_msg'] . "</option>"; 
											}
										}
										else if ($row<=0){
											echo "<option value = '0'>Sem valor</option>";
										}
								?>
							</select>
						</div>
						<!-- /TIPO MENSAGEM -->
						<!-- ASSUNTO -->
						<div class="form-group col-md-3">
							<label for="assunto" class="label-control" id="labelAssunto">Assunto:</label>
							<input type="text" class="form-control" name="assunto" id="assunto" disabled> </input>
						</div>
						<!-- /ASSUNTO -->
					</div>
					<div class="row" style="border:none;">
						<!-- MENSAGEM -->
						<div class="form-group col-md-6">
							<label for="conteudo" class="label-control" id="labelAssunto">Mensagem:</label>
							<textarea class="form-control" rows="5" name="conteudo" id="conteudo" disabled></textarea>
						</div>
						<!-- /MENSAGEM --> 
					</div>
					<div class="row" style="border:none;">
						<div class="form-group col-md-3">
							<button class="btn btn-success" id="btnEnviar" type="submit" disabled>Enviar</button>
							<button class="btn btn-default" type = "reset" id="btnLimpar">Limpar</button>
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
<script>
		$(window).load(function() {
			
			<?php echo "var des = ".$destinatario;?>;		
				debugger;
			if (des != 0)
			{
				$('#tipoMsg').prop('disabled', false);
				if(<?php echo $departamento. " == ". $departamentoUsu . " || ". $departamento ." == 0";?>)
				{
					$('#departamento').val(<?php echo $departamentoUsu?>);
					$('#destinatario').val(<?php echo $destinatario?>) ;
					$('#labelDestinatario').removeClass("hidden");
					$('#destinatario').removeClass("hidden");
				}
				else
				{
					$('#departamento').val(<?php echo $departamento?>);
					$('#destinatario').val(<?php echo $destinatario?>) ;
				}
				debugger;
				if ('contato' == '<?php echo $_GET['go']?>')
				{
					$('#departamento').prop('disabled', true);
					$('#destinatario').prop('disabled', true);
				}
				if ('responder' == '<?php echo $_GET['go']?>')
				{
					$('#departamento').prop('disabled', true);
					$('#destinatario').prop('disabled', true);
					$('#assunto').val('<?php echo $assunto?>');
				}
			}
			else
			{
				$('#labelDestinatario').addClass("hidden");
				$('#destinatario').addClass("hidden");
			}
		});

	$().ready(function() {
		

    $('#departamento').change(function() {
		var e = document.getElementById('departamento');
		var depSelect = e.options[e.selectedIndex].value;
		<?php echo "var usuDep = ".$departamentoUsu;?>;
		if (usuDep == depSelect)
		{
			$('#labelDestinatario').removeClass("hidden");
			$('#destinatario').removeClass("hidden");
			$('#tipoMsg').prop('disabled', true);
		}
		else
		{
			$('#labelDestinatario').addClass("hidden");
			$('#destinatario').addClass("hidden");
			$('#tipoMsg').prop('disabled', false);
		}
    });
	$('#destinatario').change(function() {
		$('#tipoMsg').prop('disabled', false);
		var e = document.getElementById('destinatario');
		var destSelect = e.options[e.selectedIndex].value;
		window.location.href = "escreverMensagem.php?go=selectTipo&destinatario=" + destSelect;
		
    });
	
	$('#tipoMsg').change(function() {
		$('#assunto').prop('disabled', false);
		$('#conteudo').prop('disabled', false);
		$('#btnEnviar').prop('disabled', false);
    });
});
</script>


<?php
	$consultaDeptoUsuario = mysql_query("SELECT * FROM USUARIO WHERE '$idUsuario' = id_pessoa") or die(mysql_error());
	$consultaDeptoUsuario = mysql_fetch_array($consultaDeptoUsuario);
	$deptoUsuario = $consultaDeptoUsuario['departamento'];
	//echo "<script>";
	//echo "$('#destinatario').value ==" . $deptoUsuario . "){ document.getElementById('tipoMsg').disabled= false";
	//echo "</script>";


	if (isset($_GET['go'])){
		if($_GET['go']=='enviaMsg'){
			if(sql){
			?>
			<script>
				$('.alertaMensagem').removeClass("hidden");
			</script>

			<?php
			}
		}
	}
?>