<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contatos - Projeto BD-2 </title>

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
    <!-- /MENU SUPERIOR-->
    <div class="container-fluid principal">
        <div class="row linhaPrincipal">
        <!-- MENU LATERAL -->
            <nav class="col-md-2 menuLateral">
                <ul class="nav nav-pulls nav-stacked">
                        <li>
                            <a href="index.php" id="opcaoMenuLateral0">HOME</a> 
                        </li>
                        <li>
                            <a href="escreverMensagem.php" id="opcaoMenuLateral1">Escrever Mensagem <span class="glyphicon glyphicon-pencil pull-right icones"></span></a>
                        </li>
                        <li>
                            <a href="mensagensRecebidas.php" id="opcaoMenuLateral2">Caixa de Entrada <span class="badge pull-right">12</span></a>
                        </li>
                        <li>
                            <a href="mensagensEnviadas.php" id="opcaoMenuLateral3">Mensagens Enviadas <span class="glyphicon glyphicon-envelope pull-right icones"></span></a>
                        </li>
                        <li class="active">
                            <a href="contatos.php" id="opcaoMenuLateral4">Contatos <span class="glyphicon glyphicon-list-alt pull-right icones"></span></a>
                        </li>
                        <li>
                            <a href="administrar.php" id="opcaoMenuLateral5">Administrar <span class="glyphicon glyphicon-cog pull-right icones"></span></a>
                        </li>
                    </ul>  
                </ul>
            </nav>
        <!-- /MENU LATERAL -->
        <!-- CONTEUDO -->
            <section class="col-md-10 conteudo">
                <h1>Contatos</h1>
                <br>
                <table class="table table-hover">
                    <tbody>
                        <tr>
                            <td>Ademir de Luca</td>
                            <td>Setor 102</td>
                        </tr>
                        <tr>
                            <td> Breno Bonassi dos Santos</td>
                            <td> Setor 120</td>
                        </tr>
                        <tr>
                            <td> Danilo Freitas da Silva</td>
                            <td> Setor 130</td>
                        </tr>
                        <tr>
                            <td> Fernando Luquinha</td>
                            <td> Setor 230</td>
                        </tr>
                    </tbody>    
                </table>

            </section>
            <!-- /CONTEUDO -->
        </div>  
    </div>
    <div class="container-fluid rodape">
        <footer class="row">
            <div class="col-md-4 conteudoRodape">

            </div>
            <div class="col-md-4 conteudoRodape">
                <p style="font-size:25px">Trabalho de Banco de Dados 2</p>
                <p style="font-size:20px">PUC-Campinas</p>
            </div>
            <div class="col-md-4 conteudoRodape">
                <p class="pull-right text-left"style="font-size:17px">Breno Antunes - 12021069 <br>Breno Bonassi - 120201069 <br>Danilo Freitas - 12021069 </p>
            </div>
        </footer>
    </div>
</body>
</html>