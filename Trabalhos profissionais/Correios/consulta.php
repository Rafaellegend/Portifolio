<?php
	include_once('include/conecta.php');
	verificar();
?>
<div class="container"><!--Abertura do Container-->
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-body">
				<p class=''>Consultar Carta</p>
				<form action="">
				<input type="hidden" name="page" value="<?php echo $_GET['page']; ?>"class="form-control">
					<div class="form-group form-inline"><!--Campo para o nome ou numero da carta-->
						<label>Nome do Cliente ou Numeração da Carta</label>
						<input type="text" name="nome" class="form-control">
					</div>
					<div class="form-group form-inline"><!--Campo para data entrada inicial-->
						<label>De</label>
						<input type="date" name="datade" class="form-control">
			
						<label>Até</label>
						<input type="date" name="datate" class="form-control" value="<?php echo date(Y-m-d);?>">
					</div>
						<input type="submit" >
				</form>
			</div><!--Fechamento panel-body-->
		</div><!--Fechamento panel-->
	</div><!--Fechamento col-md-12 Consulta -->
	
	<?php
	date_default_timezone_set('America/Los_Angeles');
	if(isset($_GET['nome'])){
		if($_GET['nome'] != ''){
         $nome = $_GET['nome'];
         $de = null;
         $ate = null;
		 $local = 'may';
         $nomes = consulta($conexao,$nome,$de,$ate,$local);
		 }
		elseif(isset($_GET['datade']) && isset($_GET['datate'])){
		 $nome = null;
         $de = $_GET['datade'];
         $ate = $_GET['datate'];
		 $local = 'may';
         $nomes = consulta($conexao,$nome,$de,$ate,$local);
		}
     }
	 elseif(isset($_GET['datade']) && isset($_GET['datate'])){
		 $nome = null;
         $de = $_GET['datade'];
         $ate = $_GET['datate'];
		 $local = 'may';
         $nomes = consulta($conexao,$nome,$de,$ate,$local);
	 }
	 else{
         
         $nome = '########################';
		 $de = null;
		 $ate = null;
		 $local = 'may';
         $nomes = consulta($conexao,$nome,$de,$ate,$local);
     }
?>	
	<div class="col-md-12">
		<table class="table table-striped">
			<thead>
			  <tr>
				  <th><center>Nome</center></th>
				  <th><center>Número da Carta</center></th>
				  <th><center>Data de Entrada</center></th>
				  <th><center><a data-toggle="modal" data-target="#del">
				  
				  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
				  </a></center>
				  </th>
				  <?php     
        if(isset($nomes))
            foreach ($nomes as $rs): ?>

      <tr>
        <td><center><?php echo $rs['nome'];?></center></td>
        <td><center><?php echo $rs['numero_carta'];?></center></td>
        <td><center><?php echo date("d/m/Y", strtotime($rs["data"]))?></center></td>
		<td><center><a href="<?php echo "?page=excluir&id=".$rs['ID_pessoas']; ?>">Excluir</a></center></td>
      </tr>
        <?php endforeach;?>
			  </tr>
			</thead>
		</table>

	</div><!--Fechamento col-md-12 Lista-->
</div><!--Fechamento do Container-->

<!--#####################################################
	#                                                   #
	#          Tela de confirmação para deletar         #
	#          todas as cartas da lista                 #
	#                                                   #
	#####################################################-->
	
<!-- Modal -->
<div id="del" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header" style='background:yellow;'>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Atenção</h4>
      </div>
      <div class="modal-body">
        <p>Você está prestes a deletar todas as cartas que estão na lista. Você tem certeza disso?</p>
      </div>
      <div class="modal-footer">
        <a href="<?php echo "?page=excluir&datade=".$_GET['datade']."&datate=".$_GET['datate']."local=".$local; ?>"><button type="button" class="btn btn-primary" >Confirmar</button></a>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
      </div>
    </div>

  </div>
</div>


