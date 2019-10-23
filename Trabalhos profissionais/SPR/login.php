<?php
	include_once('include\conecta.php');
	if(isset($_POST['usuario'])){
		$user = $_POST['usuario'];
		
		if(isset($_POST['senha'])){
			$senha = $_POST['senha'];
				if(isset($_POST['local'])){
					$local = $_POST['local'];
						login($conexao,$user,$senha,$local);
				};
		};	
	}
	
?>
<div class="container">
	<div class="col-md-12">
		<div class="panel panel-default login">
			<div class="panel-body">
				<p class='lgtxt'>Login</p>
				<form action="" method="post">
					<div class="form-group">
						<label>Usuário</label>
						<input type="text" name="usuario" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Senha</label>
						<input type="password" name="senha" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Local de Acesso</label>
						<select name="local" class="form-control" required>
							<option disabled selected>Selecione uma opção...</option>
							<option value="can">Canguera</option>
							<option value="may">Maylasky</option>
							<option value="sjn">São João Novo</option>
							<option value="base">Prefeitura</option>
						</select>
					</div>	
						<button class="btn btn-default" type="submit">Entrar</button>
				</form>
			</div>
		</div>
	</div>
</div>
