<?php
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true ))
{
  unset($_SESSION['login']);
  unset($_SESSION['senha']);
  unset($_SESSION['local']);
  unset($_SESSION['logado']);
}
else{
	$local = $_SESSION['local'];
	$logado = true;
}
?>

<!-- Header -->
<div class="Container-fluid header"><!-- Achei que Fluido ficaria mais bonito e dinamico -->
	<a href="https://www.saoroque.sp.gov.br/"><img src='img/prefeiturasr.png' class="img-responsive headimg1"></a><!-- Logo da Prefeitura -->

	<p class="headertext">Sistema de Posta Restante - SPR CORREIOS</p><!-- Nome do Sistema -->
	<a href="https://www.correios.com.br/"><img src='img/correios.png' class="img-responsive headimg2"></a><!-- Logo dos Correios -->
	<?php 
	if(isset($local) == true){
	echo '<p class="local">Local de Acesso:'.$local.'</p>';
	}
	?>
	
</div>

<div class="navigation">
	<!-- Barra de navegação -->
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
		<div id="navbar" class="navbar-collapse collapse">
		  <ul class="nav navbar-nav">
			<li class="navb"><a href="index.php?page=cadastro"><b>Cadastro</b></a></li> <!-- Deverá ir para a tela de cadastro de cartas -->
			<li class="navb"><a href="index.php?page=consulta"><b>Consulta</b></a></li> <!-- Deverá ir para a tela de consulta de cartas -->
			<li class="navb"><a href="index.php?page=cadastrosedex"><b>Cadastro Sedex</b></a></li> <!-- Deverá ir para a tela de cadastro do Sedex -->
			<li class="navb"><a href="index.php?page=consultasedex"><b>Consulta Sedex</b></a></li> <!-- Deverá ir para a tela de consulta do Sedex -->
		  </ul> 
		</div><!--/.nav-collapse -->
	  </div>
	</nav>
</div>

<?php 
?>