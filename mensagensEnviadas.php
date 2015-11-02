<!--<?php/*
    session_start();*/
?>-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,height=device-height, initial-scale=1.0">

<title>Mensagens Enviadas - Projeto BD-2 </title>

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
				<h2>Mesagens Enviadas</h2>
				<br>
				<table class="table table-hover">
					<tbody>
						<tr onclick="location.href = 'login.php'" class="tabelaClicavel" >
							<td><input type="checkbox"</td>
							<td>Destinatario</td>
							<td>Assunto</td>
							<td>Data</td>
						</tr>
						
					</tbody>
				</table>
            </div>      
        </div> <!--fecha a row-->
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