<!--##################################################################
    #                                                                #
	#           Sistema de Posta Restante - Ver.5.1                  #
	#           Desenvolvido por:Rafael de Jesus Alves               #
	#                                                                #
	#                                                                #
	##################################################################-->
<?php

include('include/conecta.php');
if(isset($_GET['id'])){
	 $id = $_GET['id'];

	 if(deletaPessoa($conexao,$id,$local)){
		 
		 
		 echo "<script> alert('Excluido com Sucesso')</script>";
		 header('Location: ?page=consulta'); 
		
	 }

	else {
		
		
		 echo "<script> alert('Erro ao excluir')</script>";
		 header('Location: ?page=consulta');
	}
}

elseif(isset($_GET['datade']) && isset($_GET['datate'])){
         $de = $_GET['datade'];
         $ate = $_GET['datate'];
		 
	 if(deletadeate($conexao,$de,$ate,$local)){
		echo "<script> alert('Excluido com Sucesso')</script>";
		header('Location: ?page=consulta'); 
	 }
	 else {
		
		
		 echo "<script> alert('Erro ao excluir')</script>";
		 header('Location: ?page=consulta');
	}
}







?>