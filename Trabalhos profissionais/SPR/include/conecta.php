<?php

$conexao  = mysqli_connect('localhost','root','usbw','correios');

function utf($conexao) {
    
mysqli_query($conexao,'SET character_set_connection=utf8');
mysqli_query($conexao,'SET character_set_client=utf8');
mysqli_query($conexao,'SET character_set_results=utf8');   
    
}
//Comando para Inserir a Carta no Banco
function inserePessoa($conexao,$nome,$numerocarta,$dataentrada,$local){
    
  //1 passo - criar o comando em sql
$cmdsql = "INSERT INTO `pessoas` (`nome`, `numero_carta`, `data`, `local`) VALUES ('$nome', '$numerocarta', '$dataentrada', '$local')";
    
  return mysqli_query($conexao, $cmdsql);
}
//Comando para Inserir a Correspondencia Sedex no Banco
function insereSedex($conexao,$nome,$nome2,$cr,$data,$tcarta,$local){
    
  //1 passo - criar o comando em sql
$cmdsql = "INSERT INTO `sedex` (`nome_remetente`, `nome_destinatario`, `codigo_rastreio`, `data_entrada`, `tipo`, `local`) VALUES ('$nome', '$nome2', '$cr', '$data', '$tcarta', '$local')";
  
  return mysqli_query($conexao, $cmdsql);
}
//Comando para deletar carta no Banco
function deletaPessoa($conexao,$id,$local){
    
  //1 passo - criar o comando em sql
$cmdsql = "delete from pessoas where ID_pessoas =$id and local = $local";
    
  return mysqli_query($conexao, $cmdsql);
}
//Comando para deletar Correspondencia Sedex no Banco
function deletaSedex($conexao,$id){
    
  //1 passo - criar o comando em sql
$cmdsql = "delete from sedex where ID_sedex =$id";
    
  return mysqli_query($conexao, $cmdsql);
}
//Comando para deletar Correspondencias Sedex de um determinado periodo
function deletadeate($conexao,$de,$ate,$local){
    
  //1 passo - criar o comando em sql
$cmdsql = "DELETE FROM `pessoas` WHERE `data` BETWEEN '$de' AND '$ate' AND `local` = '$local'";
    
  return mysqli_query($conexao, $cmdsql);
}

//Consulta as cartas cadastradas em um periodo
function consulta($conexao,$nome,$de,$ate,$local){
    
      $lista = array();
    
    if($de != null && $ate != null){
		if($local == 'base'){
			 $cmdsql = "SELECT * FROM `pessoas` WHERE `data` BETWEEN  '$de' and '$ate'";
		}
		else{
			 $cmdsql = "SELECT * FROM `pessoas` WHERE `local` = '$local' AND `data` BETWEEN  '$de' and '$ate'";
		}
	
	}
      
    else{
        if($local == 'base'){
			$cmdsql = "SELECT * FROM `pessoas` WHERE `nome` LIKE '$nome' or `numero_carta` LIKE '$nome'";
        }
		else{
			$cmdsql = "SELECT * FROM `pessoas` WHERE `local` = '$local' AND`nome` LIKE '$nome' or `numero_carta` LIKE '$nome'";
		}
    }
    
    $resultado = mysqli_query($conexao, $cmdsql);
    
    while($emprego = mysqli_fetch_assoc($resultado)){
        
        array_push($lista, $emprego);
        
        
    }
    
    return $lista;

    
    
}
//Consulta a Correspondencia Sedex em um periodo
function consulta_sedex($conexao,$nome){
    
      $lista = array();
    
    $cmdsql = "select * from sedex where nome_destinatario like'%$nome%' or codigo_rastreio like'%$nome%'";

    
    $resultado = mysqli_query($conexao, $cmdsql);
    
    while($emprego = mysqli_fetch_assoc($resultado)){
        
        array_push($lista, $emprego);
        
        
    }
    
    return $lista;

    
    
}

//Comandos de Login
//verificar se está logado
function verifylg($logado) {
		if($logado==true )
		{
		}
		else{
			if($_GET['page'] == 'login'){}
			else{
				header('location:index.php?page=login');
			}
		}
}
//verificar 
function login($conexao,$user,$senha,$local) {
	$cmdsql = "SELECT * FROM `usuario` WHERE `usuario` = '$user' AND `senha` = '$senha' AND `local` = '$local'";
	$result = mysqli_query($conexao, $cmdsql);
	$rows = mysqli_num_rows ($result);
		if( $rows > 0 )
		{
			echo "<script> alert('Login com sucesso')</script>";
			$_SESSION['login'] = $user;
			$_SESSION['senha'] = $senha;
			$_SESSION['local'] = $local;
			$_SESSION['logado'] = true;
			header('location:?page=cadastro');
		}
		else{
			echo "<script> alert('Erro no Login')</script>";
			unset ($_SESSION['login']);
			unset ($_SESSION['senha']);
			unset ($_SESSION['local']);
			header('location:?page=login');
		   
		}
}

//Verificar
function verificar(){
	if(!isset($_SESSION['logado']) == true){
	echo "<script> alert('Voc? deve estar logado para utilizar o sistema')</script>";
	header('location:?page=login');	
	}
}


?>