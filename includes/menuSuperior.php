<?php
    $pagina_atual = basename($_SERVER['PHP_SELF']);
?>


<nav class="navbar navbar-default" >  
    <div class="navbar-header navTop">
		    <a class="navbar-brand" href="#" id="navbarBrand">Sistema de Comunicação Interna</a>
	</div>
	
    <div class="navbar-collapse collapse navTop">
	<?php 
		if($pagina_atual!="login.php"){
	?>

	    <ul class="nav navbar-nav navbar-right teste">
		      <li><a <? if($pagina_atual=="perfil.php"){ echo "class='activeTopo'";}?>id="menuTopOption1" href="perfil.php" target="principal"><span class="glyphicon glyphicon-user"></span> Perfil</a></li>
		      <li><a id="menuTopOption2" href="login.php"><span class="glyphicon glyphicon-log-out"></span> Sair</a></li>
		 </ul>
    <?php
		}
	?>
	</div>  
    
</nav>