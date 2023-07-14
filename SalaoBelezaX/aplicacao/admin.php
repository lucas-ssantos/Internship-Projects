<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Beleza X</title>
    <link rel="icon" href="./img/favicon.svg" type="image/svg+xml">
	
	<!-- BOOTSTRAP -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
	<!-- FONTS -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fasthand">
	
	<!-- CSS -->
	<link rel="stylesheet" href="./css/style.css">
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	
	<script>
		function Validar()
		{
			
			var email = document.getElementById("email").value;
			var senha = document.getElementById("senha").value;
			
			if(email == "")
			{
				alert("Campo E-mail não foi preenchido!");
			}
			else if(senha == "")
			{
				alert("Campo Senha não foi preenchido!");
			}
			else
			{
				document.getElementById("form").submit();
			}
				
		}

	</script>
	
</head>
<body>
	<?php require_once 'inc/config.php'; ?>
	<div class="row">
		<div class="col-1"></div>
		<div class="col-10">
			<?php
				// se houver uma mensagem de erro, mostra na tela
				if ( isset($_SESSION['msg']) ){
					echo $_SESSION['msg'];
					unset($_SESSION['msg']);
				}
				else
				{
					echo("<span></span>");
				}
			?>
		</div>
		<div class="col-1"></div>
	</div>
	<div class="row">
		<div class="col-2"></div>
		
		<div class="col-8">
			<div class="card">
				<div class="card-header">
					<h4>Admin</h4>
				</div>
				<div class="card-body">
					<form action="login.php" method="post" id='form'>
						<div class="form-group">
							<label for="email">E-mail:</label>
							<input type="email" class="form-control" id="email" name="email_user" placeholder="exemplo@exemplo.com">
						</div>
						
						<div class="form-group">
							<label for="senha">Senha:</label>
							<input type="password" class="form-control" id="senha" name="senha_user">
						</div>
							<input type='button' onclick='Validar()' value='Entrar' class='btn btn-success' class='form-group'>
							<a href="../index.html">
							   <input type='button' value='Voltar' class='btn btn-primary' class='form-group'>
							</a>
					</form>
				</div>
			</div>
		</div>
			
		<div class="col-2"></div>
	</div>
	
</body>
</html>