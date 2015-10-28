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
<?php
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

<?php
  $_SESSION["id"] = $_POST['login'];
?>
</head>
<body>
<!-- MENU SUPERIOR -->
	 <nav class="navbar navbar-default navbar-fixed-top" >
		  <div class="container-fluid">
			    <div class="navbar-header">
   				    <a class="navbar-brand" href="#"id="navbar">Sistema de Comunicação Interna</a>
  			  </div>
  	      <div id="navbar" class="navbar-collapse collapse">
    			    <ul class="nav navbar-nav navbar-right">
    				      <li ><a href="perfil.php" target="principal">Perfil</a></li>
    				      <li><a href="login.php">Sair</a></li>
   				    </ul>
  		    </div>
 		  </div>
	  </nav>
    <br/><br/>
<!-- CORPO PRINCIPAL -->
    <div id="wrapper">

        <!-- MENU LATERAL -->
            <ul class="nav sidebar-nav">
                <li class="sidebar-brand">
                   <a href="home.php" target="principal">HOME</a>
                </li>
                <li>
                    <a href="escreverMensagem.php" target="principal">Escrever mensagem</a>
                </li>
                <li>
                    <a href="mensagensRecebidas.php" target="principal">Mensagens recebidas</a>
                </li>
                <li>
                    <a href="mensagensEnviadas.php" target="principal">Mensagens enviadas</a>
                </li>
                <li>
                    <a href="contatos.php" target="principal">Contatos</a>
                </li>
                <li>
                    <a href="administrar.php" target="principal">Administrar</a>
                </li>
            </ul>
        
    
        <!-- FIM MENU LATERAL -->
        <!-- CONTEUDO -->
        <br>
        <div id="content-wrapper" class="container-fluid pull-right">
            <iframe src="home.php" name="principal" id="principal"></iframe>
        </div>
        <!-- FIM DO CONTEUDO -->

    </div>


</body>

</html>