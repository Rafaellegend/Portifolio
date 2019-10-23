<?php
	include_once('include/conecta.php');
	verificar();
?>
<div class="container">
	<div class="col-md-12">
		<div class="panel panel-default ">
			<div class="panel-body">
				<p class=''>Cadastrar SEDEX</p>
				<form action="?page=cadastrosedex" method="post">
				<input type="hidden" name="page" value="<?php echo $_GET['page']; ?>"class="form-control">
					<div class="form-group form-inline">
						<label>Nome do Remetente</label>
						<input type="text" name="nr" class="form-control" required>
					</div>
					<div class="form-group form-inline">
						<label>Nome do Destinatário</label>
						<input type="text" name="nd" class="form-control" required>
					</div>
					<div class="form-group form-inline">
						<label>Tipo de SEDEX</label>
						<select name="tipo" class="form-control">
							<option disabled selected>Selecione uma opção...</option>
							<option value="PAC">PAC</option>
							<option value="SEDEX">SEDEX</option>
						</select>
					</div>	
					<div class="form-group form-inline">
						<label>Codigo de Rastreio</label>
						<input type="text" name="rastreio" class="form-control" required>
					</div>
					<div class="form-group form-inline">
						<label>Data Entrada</label>
						<input type="date" name="data" class="form-control" required>
					</div>
						<button id="btnenviar" name="btnenviar" class="btn btn-default">Cadastrar</button>
				</form>
			</div>
		</div>
	</div>
</div>
<?php
  if(isset($_POST['btnenviar'])){
      $nome2 = $_POST['nd'];
      $nome = $_POST['nr'];
      $tcarta = $_POST['tipo'];
      $cr = $_POST['rastreio'];
	  $data = $_POST['data'];
	  $local = 'base';
      
      
      
      if(insereSedex($conexao,$nome,$nome2,$cr,$data,$tcarta,$local)){
          
          
          echo "<script>alert('Cadastrado com sucesso')</script>";
          
      }
      
      else {
          
          
               
          echo "<script>alert('Erro ao cadastrar,verifique os dados informados')</script>";
          
      }
  }
    
    
    
    ?>