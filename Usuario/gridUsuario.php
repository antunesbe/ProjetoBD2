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
                <h2>Usuários</h2>
				<br>
				<div class="form-group">
					<button class = "pull-right"><a class="button" href="createUsuario.php"><span class="glyphicon glyphicon-plus"></span>Adicionar</a></button>
					<table class="table table-hover">
						<tbody>
							<tr onclick="location.href = '../login.php'" class="tabelaClicavel" >
								<td><input type="checkbox"</td>
								<td>Nome</td>
								<td>E-mail</td>
								<td>Data de Nascimento</td>
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
		
