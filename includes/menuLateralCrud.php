<?php
    $pagina_atual = basename($_SERVER['PHP_SELF']);
?>


<div class="col-md-2 menuLateral">
    <div id="sidebar" class="sidebar">
        <ul id="sideMenu" class="nav">
            <li id="sidebarHome">
                <a class="sideOptions" href="../index.php">HOME</a>
            </li>

            <li id="menuOption1">
                <a <?if($pagina_atual=="escreverMensagem.php"){echo "class='active sideOptions'";} else{ echo "class='sideOptions'";}?> href="../escreverMensagem.php">Escrever Mensagem <span class="glyphicon glyphicon-pencil pull-right icones"></span></a>
            </li>

            <li id="menuOption2">
                <a <?if($pagina_atual=="mensagensRecebidas.php"){echo "class='active sideOptions'";} else{ echo "class='sideOptions'";}?> href="../mensagensRecebidas.php">Caixa de Entrada <span class="badge pull-right">12</span></a>
            </li>
            <li id="menuOption3">
                <a <?if($pagina_atual=="mensagensEnviadas.php"){echo "class='active sideOptions'";} else{ echo "class='sideOptions'";}?> href="../mensagensEnviadas.php" >Mensagens Enviadas <span class="glyphicon glyphicon-envelope pull-right icones"></span></a>
            </li>
            <li id="menuOption4">
                <a <?if($pagina_atual=="contatos.php"){echo "class='active sideOptions'";} else{ echo "class='sideOptions'";}?> href="../contatos.php">Contatos <span class="glyphicon glyphicon-list-alt pull-right icones"></span></a>
            </li>
            <li id="menuOption5">
                <a <?if($pagina_atual=="administrar.php"){echo "class='active sideOptions'";} else{ echo "class='sideOptions'";}?> href="../administrar.php">Administrar <span class="glyphicon glyphicon-cog pull-right icones"></span></a>
            </li>
        </ul>
    </div>
</div>