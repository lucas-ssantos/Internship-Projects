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
		<h2>Clientes</h2>

		<?php
			// se houver uma mensagem de erro, mostra na tela
			if ( isset($_SESSION['msg']) ){
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}
		?>

		<div class="text-right">
			<a class="btn btn-primary" href="?classe=Cliente&acao=create">Novo</a>
			<br>
			<br>
		</div>
		
		<!-- Exibindo Registros de Clientes -->
		<table class="table">
			<tr>
				<th>Nome</th>
				<th>E-Mail</th>
				<th>Telefone</th>
				<th></th>
			</tr>
			<?php foreach( $clientes AS $cliente ){ ?>
				<tr>
					<td><?=$cliente->nome_cliente?></td>
					<td><?=$cliente->email_cliente?></td>
					<td><?=$cliente->telefone_cliente?></td>
					<td>
						<a class="btn btn-primary" href="?classe=Cliente&acao=read&id_cliente=<?=$cliente->id_cliente?>">Visualizar</a>					
						<a class="btn btn-primary" href="?classe=Cliente&acao=update&id_cliente=<?=$cliente->id_cliente?>">Alterar</a>						
					</td>
				</tr>
			<?php } ?>
		</table>
	</body>
</html>
