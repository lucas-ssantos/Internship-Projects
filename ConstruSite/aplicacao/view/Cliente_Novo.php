<html>
	<head>
		
		<title>Cadastrar Cliente</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		
		<script>
			function Validar()
			{
				var nome = document.getElementById("nome").value;
				var email = document.getElementById("email").value;
				var telefone = document.getElementById("telefone").value;
				var senha = document.getElementById("senha").value;
				var dat_nasc = document.getElementById("data_nasc").value;
				
				if(nome == "")
				{
					alert("Campo Nome não foi preenchido!");
				}
				else if(email == "")
				{
					alert("Campo E-mail não foi preenchido!");
				}
				else if(telefone == "")
				{
					alert("Campo Telefone não foi preenchido!");
				}
				else if(senha == "")
				{
					alert("Campo Senha não foi preenchido!");
				}
				else if(data_nasc == "")
				{
					alert("Campo Data de Nascimento não foi preenchido!");
				}
				else
				{
					document.getElementById("form").submit();
				}
			}

			function formatar(mascara, documento)
			{
			   var i = documento.value.length;
			   var saida = mascara.substring(0,1);
			   var texto = mascara.substring(i)
			  
			   if (texto.substring(0,1) != saida)
			   {
				documento.value += texto.substring(0,1);
			   }  
			}
		</script>
		
	</head>
	<body>
		<h2>Novo Cliente</h2>
		<form action="" method="post" id='form'>

			<div class="form-group">
				<label for="nome">Nome:</label>
				<input type="text" class="form-control" id="nome" name="nome_cliente" placeholder="Lucas João Silva">
			</div>

			<div class="form-group">
				<label for="email">E-mail:</label>
				<input type="email" class="form-control" id="email" name="email_cliente" placeholder="exemplo@exemplo.com">
			</div>
			
			<div class="form-group">
				<label for="telefone">Telefone:</label>
				<input type="text" class="form-control" id="telefone" name="telefone_cliente" maxlength="13" onkeypress="formatar('## #####-####', this);" placeholder="DDD 0000-0000">
			</div>
			
			<div class="form-group">
				<label for="senha">Senha:</label>
				<input type="password" class="form-control" id="senha" name="senha_cliente">
			</div>
			
			<div class="form-group">
				<label for="data_nasc">Data de Nascimento:</label>
				<input type="date" class="form-control" id="data_nasc" name="data_nasc_cliente">
			</div>

			<input type='button' onclick='Validar()' value='Criar' class='btn btn-primary' class='form-group'>

		</form>
	</body>
</html>
