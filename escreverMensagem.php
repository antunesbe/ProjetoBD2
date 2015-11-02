<!--<?php/*
    session_start();*/
?>-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,height=device-height, initial-scale=1.0">

<title>Nova Mensagem - Projeto BD-2 </title>

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
                
                <h2>Escrever Mensagem</h2>
				<form class="form form-vertical">
					<div class="row" style="border:none;">
						<div class="form-group col-md-3">
							<label for="destinatario" class="label-control" id="labelDestinatario">Destinatario:</label>
							<select class="form-control" name="destinatario" id="destinatario">
								<option></option>
								<option>Contas a receber</option>
							</select>
						</div>
					</div>
					<div class="row" style="border:none;">
						<div class="form-group col-md-3">
							<label for="tipoMsg" class="label-control" id="labelTipoMsg">Tipo da Mensagem:</label>
							<select class="form-control" name="tipoMsg" id="tipoMsg">
								<option></option>
								<option>Aviso</option>
							</select>
						</div>
					</div>
					<div class="row" style="border:none;">
						<div class="form-group col-md-3">
							<label for="assunto" class="label-control" id="labelAssunto">Assunto:</label>
							<input type="text" class="form-control" name="assunto" id="assunto">
						</div>
					</div>
					<div class="row" style="border:none;">
						<div class="form-group col-md-6">
							<label for="assunto" class="label-control" id="labelAssunto">Mensagem:</label>
							<textarea class="form-control" rows="5" name="mensagem" id="mensagem"></textarea>
						</div>
					</div>
					<div class="row" style="border:none;">
						<div class="form-group col-md-3">
							<button class="btn btn-success" id="btnEnviar">Enviar</button>
							<button class="btn btn-default" id="btnLimpar">Limpar</button>
						</div>
					</div>
				</form>

            </div><!--/col-->

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
		