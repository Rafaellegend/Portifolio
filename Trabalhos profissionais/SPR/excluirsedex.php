<?php
	include('include/conecta.php');

 $id = $_GET['id'];

 if(deletaSedex($conexao,$id)){
	 
	 
	 echo "<script> alert('Excluido com Sucesso')</script>";
     header('Location: ?page=consultasedex');
	
 }

else {
	
	
	 echo "<script> alert('Erro ao excluir')</script>";
     header('Location: ?page=consultasedex');
}



?>