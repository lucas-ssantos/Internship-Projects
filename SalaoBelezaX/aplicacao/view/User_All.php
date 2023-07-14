<html>
	<head>
	
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	
	</head>
	<body>
		<h2>Lista de Usuários</h2>

		<?php
			// se houver uma mensagem de erro, mostra na tela
			if ( isset($_SESSION['msg']) )
			{
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
		?>
		
		<div class='text-right'>
			<a class='btn btn-success' href='?classe=User&acao=create'>Novo</a>
			<a class='btn btn-warning' href='?classe=User&acao=deslogar'>Deslogar</a>
		</div>
		
		<!-- Exibindo Registros de Usuários -->
		<table class="table">
			<tr>
				<th>Nome</th>
				<th>E-Mail</th>
				<th>Admin</th>
				<th></th>
			</tr>
			<?php foreach( $users AS $user ){ ?>
				<tr>
					<td><?=$user->nome_user?></td>
					<td><?=$user->email_user?></td>
					<td>
						<?php
							$admin;
							switch($user->adm_user)
							{
								case 1:
									$admin = "Sim";
									break;
								
								default:
									$admin = "Não";
	
							}
						?>
						<?=$admin?>
					</td>
					<td>
						<a class="btn btn-primary" href="?classe=User&acao=read&id_user=<?=$user->id_user?>">Visualizar</a>					
						<a class="btn btn-primary" href="?classe=User&acao=update&id_user=<?=$user->id_user?>">Alterar</a>					
						<a class="btn btn-danger" href="?classe=User&acao=del&id_user=<?=$user->id_user?>">Deletar</a>					
					</td>
				</tr>
			<?php } ?>
		</table>
	</body>
</html>
