<!--<?php/*
    session_start();*/
?>-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,height=device-height, initial-scale=1.0">

<title>Administrar - Projeto BD-2 </title>

<!-- Arquivos CSS -->
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/indexStyle.css">
<link rel="stylesheet" href="css/menuTopoEstilo.css">
<link rel="stylesheet" href="css/menuLateralEstilo.css">
<link rel="stylesheet" href="css/footerEstilo.css">

<!-- Arquivos Javascript -->
<script src="js/bootstrap.js"></script>
<script src="js/jquery.js"></script>
<!--
<?php/*
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
  $_SESSION["id"] = $_POST['login'];*/
?>-->
</head>
<body>
<!-- MENU SUPERIOR -->
<!--inclui o Menu Superior-->
<?php
    include "includes/menuSuperior.php";
?>
<!-- CORPO PRINCIPAL -->

    <section id="content" class="container-fluid">
<!-- MENU LATERAL -->
        <div class="row">
            <!-- inclui uma row col-md-2 com o menu lateral-->
            <?php
                include "includes/menuLateral.php";
            ?>
<!-- FIM MENU LATERAL -->

<!-- CONTEUDO -->


            <div class="col-md-10 display">

				<h2>Administrar</h2>
				<br>
				<form class="form form-vertical">
							<a class="btn btn-default col-md-8" href="Usuario/gridUsuario.php">Usuarios</a>
							<a class="btn btn-default col-md-8" href="Perfil/gridPerfil.php">Perfis</a>
							<a class="btn btn-default col-md-8" href="Setor/gridSetor.php">Setores</a>
							<a class="btn btn-default col-md-8" href="TipoMensagem/gridTipoMensagem.php">Tipos de Mensagem</a>
						
				</form>
			
            </div>   
               
        </div><!--/row-->  
    </section>

<!-- FIM DO CONTEUDO -->
<!--RODAPE-->
<!--inclui um rodape dividido em 4 colunas-->
    <?php
        include "includes/footer.php";
    ?>
<!--RODAPE-->
</body>

</html>