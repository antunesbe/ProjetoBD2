<?php
	session_start();
	include "includes/conexaoBD.php";
	
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

    <title>Administrar - Projeto BD-2 </title>

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
                <li><a id="opcaoMenuSuperior2" href="login.php"><span class="glyphicon glyphicon-log-out"></span> Sair</a></li>
            </ul>
        </div>
    </nav>
    <!-- /MENU SUPERIOR -->
    <div class="container-fluid principal">
        <div class="row linhaPrincipal">
        <!-- MENU LATERAL -->
            <nav class="col-md-2 menuLateral">
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
                <h2>Administrar</h2>
                
                <div class="row">
                    <!--<div class="col-md-1">
                    </div>-->
                    <div class="col-md-3">
                        <div class="panel panel-success">
                            <a href="Usuario/gridUsuario.php">
                                <div class="panel-heading" id="titleUsuario">
                                    Usuários
                                </div>
                            </a>
                            <div class="panel-body admPills" id="bodyUsuario">
                                <ul class="nav nav-pills nav-stacked">
                                    <li>
                                        <a href="Usuario/gridUsuario.php">Listar</a>
                                    </li>
                                    <li>
                                        <a href="Usuario/createUsuario.php">Adicionar</a>
                                    </li>
                                    <li>
                                        <a href="#">Editar</a>
                                    </li>
                                    <li>
                                        <a href="#">Excluir</a>
                                    </li>
                                </ul>
                            </div>
                            
                        </div>
                    </div><!--
                    <div class="col-md-2">
                    </div>-->
                    <div class="col-md-3">
                        <div class="panel panel-warning">
                            <a href="Perfil/gridPerfil.php">
                                <div class="panel-heading" id="titlePerfil">Perfis
                                </div>
                            </a>
                                <div class="panel-body admPills">
                                    <ul class="nav nav-pills nav-stacked" id="bodyPerfil">
                                        <li>
                                            <a href="Perfil/gridPerfil.php?&page=1">Listar</a>
                                        </li>
                                        <li>
                                            <a href="Perfil/create.php">Adicionar</a>
                                        </li>
                                        <li>
                                            <a href="#">Editar</a>
                                        </li>
                                        <li>
                                            <a href="#">Excluir</a>
                                        </li>
                                    </ul>
                                </div>
                            
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="panel panel-danger">
                            <a href="Setor/gridSetor.php">
                                <div class="panel-heading"  id="titleSetor">
                                    Departamentos
                                </div>
                            </a>
                                <div class="panel-body admPills" id="bodySetor">
                                    <ul class="nav nav-pills nav-stacked">
                                        <li>
                                            <a href="Setor/gridSetor.php">Listar</a>
                                        </li>
                                        <li>
                                            <a href="Setor/create.php">Adicionar</a>
                                        </li>
                                        <li>
                                            <a href="Setor/edit.php">Editar</a>
                                        </li>
                                        <li>
                                            <a href="#">Excluir</a>
                                        </li>
                                    </ul>
                                </div>
                            
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="panel panel-primary">
                            <a href="TipoMensagem/gridTipoMensagem.php">
                                <div class="panel-heading" id="titleTipoMensagem">
                                    Tipos de Mensagem
                                </div>
                            </a>
                            <div class="panel-body admPills">
                                <ul class="nav nav-pills nav-stacked" id="bodyTipoMensagem">
                                    <li>
                                        <a href="TipoMensagem/gridTipoMensagem.php">Listar</a>
                                    </li>
                                    <li>
                                        <a href="TipoMensagem/create.php">Adicionar</a>
                                    </li>
                                    <li>
                                        <a href="#">Editar</a>
                                    </li>
                                    <li>
                                        <a href="#">Excluir</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div><!--
                    <div class="col-md-2">
                    </div>-->
                </div>
            </section>
            <!-- /CONTEUDO -->
        </div>  
    </div>
    <!-- RODAPE -->
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
    <!-- /RODAPE -->
</body>
</html>