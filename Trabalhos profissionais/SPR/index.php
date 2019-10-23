<?php
include_once ('meta.php');//metadados
include_once ('header.php');//headers

If(isset($_GET['page'])){$page=$_GET['page'];};
If($_SERVER['REQUEST_URI']= ''){//quando não a pagina for nenhuma
	include_once ('cadastro.php');
}
elseif(!isset($_GET['page'])){//pagina inicial
	include_once ('cadastro.php');
}
elseif($_GET['page'] == 'cadastro'){//pagina Cadastro
	include_once ('cadastro.php');
}
elseif($_GET['page'] == 'consulta'){//pagina Consulta
	include_once ('consulta.php');
}
elseif($_GET['page'] == 'excluir'){//pagina excluir linhas pessoas
	include_once ('excluir.php');
}
elseif($_GET['page'] == 'consultasedex'){//pagina Consulta Sedex
	include_once ('consultasedex.php');
}
elseif($_GET['page'] == 'cadastrosedex'){//pagina Cadastro Sedex
	include_once ('cadastrosedex.php');
}
elseif($_GET['page'] == 'excluirsedex'){//pagina excluir linhas Sedex
	include_once ('excluirsedex.php');
}

elseif($_GET['page'] == 'login'){ //pagina de Login
	include_once ('login.php');
}

elseif($_GET['page'] == 'verificar'){ //pagina de Login
	include_once ('verilogin.php');
};

include_once ('footer.php');//footer
?>