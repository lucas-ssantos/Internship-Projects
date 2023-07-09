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
		<h2>Visualizar Cliente</h2>

			<div class="form-group">
				<label for="nome">Nome:</label>
				<input disabled type="text" class="form-control" id="nome" name="nome_cliente" value="<?= $cliente->getNomeCliente() ?>">
			</div>

			<div class="form-group">
				<label for="email">E-mail:</label>
				<input disabled type="email" class="form-control" id="email" name="email_cliente" value="<?=$cliente->getEmailCliente()?>">
			</div>
			
			<div class="form-group">
				<label for="telefone">Telefone:</label>
				<input disabled type="text" class="form-control" id="telefone" name="telefone_cliente" value="<?=$cliente->getTelefoneCliente()?>">
			</div>
			
			<div class="form-group">
				<label for="email">Senha:</label>
				<input disabled type="password" class="form-control" id="senha" name="senha_cliente" value="<?=$cliente->getSenhaCliente()?>">
			</div>
			
			<div class="form-group">
				<label for="data_nasc">Data de Nascimento:</label>
				<input disabled type="date" class="form-control" id="data_nasc" name="data_nasc_cliente" value="<?=$cliente->getDataNascCliente()?>">
			</div>
	</body>
</html>
