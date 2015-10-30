<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">

<title>Pagina Inicial - Projeto BD-2 </title>

<!-- Arquivos CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="css/estilo.css">
<!-- Arquivos Javascript -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!--<?php
   $login = NULL;
    if($_POST){
        $login= $_POST['login'];
    }
?>
<script type="text/javascript">
    var flag = "<?echo $login;?>";
    if(!flag){
        alert("faça login");
        window.location.href="login.php";
    }
</script>
-->
<?php
  $_SESSION["id"] = $_POST['login'];
?>
</head>
<body>
<!-- MENU SUPERIOR -->
	<nav class="navbar navbar-default navbar-fixed-top" >  
	    <div class="navbar-header navTop">
			    <a class="navbar-brand" href="#" id="navbarBrand">Sistema de Comunicação Interna</a>
		</div>
        <div class="navbar-collapse collapse navTop">
		    <ul class="nav navbar-nav navbar-right">
			      <li ><a href="perfil.php" target="principal"><span class="glyphicon glyphicon-user"></span> Perfil</a></li>
			      <li id="lastOptionMenuTop"><a href="login.php"><span class="glyphicon glyphicon-log-out"></span> Sair</a></li>
			    </ul>
	    </div>  
	</nav>

<!-- CORPO PRINCIPAL -->
    <section id="content">

        <!-- MENU LATERAL -->
        <div id="sidebar" class="sidebar">
            <ul id="sideMenu" class="nav">
                <li id="sidebarHome">
                    <a class="sideOptions" href="home.php" target="principal">HOME</a>
                </li>
                <li>
                    <a class="sideOptions" href="escreverMensagem.php" target="principal">Escrever Mensagem<span class="glyphicon glyphicon-pencil pull-right icones"></span></a>
                </li>
                <li>
                    <a class="sideOptions" href="mensagensRecebidas.php" target="principal">Caixa de Entrada<span class="badge pull-right">12</span></a>
                </li>
                <li>
                    <a class="sideOptions" href="mensagensEnviadas.php" target="principal">Mensagens Enviadas<span class="glyphicon glyphicon-envelope pull-right icones"></span></a>
                </li>
                <li>
                    <a class="sideOptions" href="contatos.php" target="principal">Contatos<span class="glyphicon glyphicon-list-alt pull-right icones"></span></a>
                </li>
                <li>
                    <a class="sideOptions" href="administrar.php" target="principal">Administrar<span class="glyphicon glyphicon-cog pull-right icones"></span></a>
                </li>
            </ul>
        </div>

        <!-- FIM MENU LATERAL -->
        <!-- CONTEUDO -->
        
        <div id="content-wrapper" class="pull-right">
            <iframe src="home.php" name="principal" id="principal"></iframe>
        </div>
        <!-- FIM DO CONTEUDO -->

    </section>


</body>

</html>