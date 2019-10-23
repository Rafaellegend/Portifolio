<?php
	include_once('include/conecta.php');
	verificar();
?>
<div class="container"><!--Abertura do Container-->
	<div class="col-md-12">
		<div class="panel panel-default">
			<div class="panel-body">
				<p class=''>Consultar SEDEX</p>
				<form action="?page=consultasedex" method="post">
				<input type="hidden" name="page" value="<?php echo $_GET['page']; ?>"class="form-control">
					<div class="form-group form-inline"><!--Campo para o nome ou numero da carta-->
						<label>Nome do Destinatario ou Codigo de Rastreio</label>
						<input type="text" name="nome" class="form-control" required>
					</div>
						<input type="submit" value="Consultar">
				</form>
			</div><!--Fechamento panel-body-->
		</div><!--Fechamento panel-->
	</div><!--Fechamento col-md-12 Consulta -->
	
	
<?php
if(isset($_POST['nome'])){
         
         $nome = $_POST['nome'];
         $nomes = consulta_sedex($conexao,$nome);
         
     }
     else{
         
         $nome = '########################';
         $nomes = consulta_sedex($conexao,$nome);
     }
?>	
	
	<div class="col-md-12">
		<table class="table table-striped">
			<thead>
			  <tr>
				  <th><center>Nome do Remetente</center></th>
				  <th><center>Nome do Destinatario</center></th>
				  <th><center>Tipo</center></th>
				  <th><center>Codigo de Rastreio</center></th>
				  <th><center>Data de Entrada</center></th>
				  <th><center>+</center>
				  </th>
			  </tr>
			</thead>
				  <?php     
        if(isset($nomes))
            foreach ($nomes as $rs): ?>

      <tr>
        <td><center><?php echo $rs['nome_remetente'];?></center></td>
        <td><center><?php echo $rs['nome_destinatario'];?></center></td>
        <td><center><?php echo $rs['tipo'];?></center></td>
        <td><center><?php echo $rs['codigo_rastreio'];?></center></td>
        <td><center><?php echo date("d/m/Y", strtotime($rs["data_entrada"]))?></center></td>
		<td><center><a href="<?php echo "?page=excluirsedex&id=".$rs['ID_sedex']; ?>">Excluir</a></center></td>
      </tr>
        <?php endforeach;?>
			  
			
		</table>

	</div><!--Fechamento col-md-12 Lista-->
</div><!--Fechamento do Container-->
