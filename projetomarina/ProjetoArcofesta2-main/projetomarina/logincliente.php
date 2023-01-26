<?php
    require_once 'head.php';  
	
	include_once 'conexao.php';

	session_start();
	ob_start();

  ?>


<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Fazer login</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>
			</div>
			<div class="card-body">
				<form method="POST" action="">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="Usuário" name="usuario">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="Senha" name="senha">
					</div>
				
					<div class="form-group">
					<a href="formulariocliente.php"><button class="btn float-right">Cadastre-se</a></button>
					</div>

					<div class="form-group">
						<input type="submit" value="Login" class="btn float-right login_btn" name="btnlogin">
					</div>
				</form>
			</div>
			<div class="card-footer">
				
				<div class="d-flex justify-content-center links">
					<a href="#">Esqueceu a Senha?</a>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
   
  ?>