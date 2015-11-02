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
                <h2>Cadastrar Tipo de Mensagem</h2>
				<form class="form form-vertical">
					<div class="row"  style="border:none;">
						<div class="form-group col-md-6">
							<label for="nome" class="label-control" id="labelNome">Nome:</label>
							<input type="text" class="form-control" name="nome" id="nome">
						</div>
					</div>
					<div class="row" style="border:none;">
						<div class="form-group col-md-6">
							<label for="descricao" class="label-control" id="labelDescricao">Descrição:</label>
							<textarea class="form-control" rows="5" name="descricao" id="descricao"></textarea>
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
        include "../includes/footer.php";
    ?>
<!--RODAPE-->
</body>

</html>
		