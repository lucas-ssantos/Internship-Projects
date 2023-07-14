<html>
	<head>
		
		<title>Visualizar Cadastro</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		
	</head>
	<body>
		<h2>Visualizar Usuário</h2>

			<div class="form-group">
				<label for="nome">Nome:</label>
				<input disabled type="text" class="form-control" id="nome" name="nome_user" value="<?= $user->getNomeUser() ?>">
			</div>

			<div class="form-group">
				<label for="email">E-mail:</label>
				<input disabled type="email" class="form-control" id="email" name="email_user" value="<?=$user->getEmailUser()?>">
			</div>
			
			<div class="form-group">
				<label for="adm">Administrador:</label>
				
				<?php
					$admin;
					switch($user->getAdmUser())
					{
						case 1:
							$admin = "Sim";
							break;
						
						default:
							$admin = "Não";
					}
				?>
				
				<input disabled type="text" class="form-control" id="adm" name="adm_user" value="<?=$admin?>">
			</div>
			
			<a class='btn btn-primary' href='?classe=User&acao=all'>Voltar</a>
			
	</body>
</html>
