<?php
	include_once('include/conecta.php');
	verificar();
?>

<div class="container">
	<div class="col-md-12">
		<div class="panel panel-default ">
			<div class="panel-body">
				<p class=''>Cadastrar Cartas</p>
				<form action="?page=cadastro" method="post">
				<input type="hidden" name="page" value="<?php echo $_GET['page']; ?>"class="form-control">
					<div class="form-group form-inline">
						<label>Nome do Cliente</label>
						<input type="text" name="nome" class="form-control" required>
					</div>
					<div class="form-group form-inline">
						<label>Numeração Carta</label>
						<input type="numeric" name="nc" class="form-control" required>
					</div>
					<div class="form-group form-inline">
						<label>Data Entrada</label>
						<input type="date" name="data" class="form-control" required>
					</div>
						<input type="submit" value='Cadastrar'>
				</form>
			</div>
		</div>
	</div>
</div>
<?php
	if(isset($_POST['nome'])){
		
		$nome = $_POST['nome'];
		$numerocarta = $_POST['nc'];
		$dataentrada = $_POST['data'];
		
		if(inserePessoa($conexao,$nome,$numerocarta,$dataentrada,$local)){
			 echo "<script>alert('Cadastrado com sucesso')</script>";
		}
		else{
			echo "<script>alert('Erro ao cadastrar,verifique os dados informados')</script>";
		}
	}
?>