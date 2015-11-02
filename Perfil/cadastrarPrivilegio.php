<!--<?php/*
    session_start();*/
?>-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,height=device-height, initial-scale=1.0">

<title>Pagina Inicial - Projeto BD-2 </title>

<!-- Arquivos CSS -->
<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/indexStyle.css">
<link rel="stylesheet" href="../css/menuTopoEstilo.css">
<link rel="stylesheet" href="../css/menuLateralEstilo.css">
<link rel="stylesheet" href="../css/footerEstilo.css">

<!-- Arquivos Javascript -->
<script src="../js/bootstrap.js"></script>
<script src="../js/jquery.js"></script>

</head>
<body>
<!-- MENU SUPERIOR -->
<!--inclui o Menu Superior-->
<?php
    include "../includes/menuSuperiorCrud.php";
?>
<!-- CORPO PRINCIPAL -->

    <section id="content" class="container-fluid">
<!-- MENU LATERAL -->
        <div class="row">
            <!-- inclui uma row col-md-2 com o menu lateral-->
            <?php
                include "../includes/menuLateralCrud.php";
            ?>
<!-- FIM MENU LATERAL -->

<!-- CONTEUDO -->


            <div class="col-md-10 display">
                <h2>Cadastrar Privilegio</h2>
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
							<button class="btn btn-success" id="btnEnviar">Enviar</button>
							<button class="btn btn-default" id="btnLimpar">Limpar</button>
						</div>
					</div>
				</form>
				
				<div class="form-group">
					<table class="table table-hover">
						<tbody>
							<tr onclick="location.href = 'login.php'" class="tabelaClicavel" >
								<td><input type="checkbox"</td>
								<td>Perfil Remetente</td>
								<td>Tipo Mensagem</td>
								<td>Perfil Destinatario</td>
								<td>
									<button class = "glyphicon glyphicon-edit"></button>
									<button class = "glyphicon glyphicon-search"></button>
									<button class = "glyphicon glyphicon-remove"></button>
								</td>
							</tr>
							
						</tbody>
					</table>
				</div>

            </div><!--/col-->

        </div><!--/row-->  
    </section>

<!-- FIM DO CONTEUDO -->
<!--RODAPE-->
<!--inclui um rodape dividido em 4 colunas-->
    <?php
        include "../includes/footer.php";
    ?>
<!--RODAPE-->
</body>

</html>

		