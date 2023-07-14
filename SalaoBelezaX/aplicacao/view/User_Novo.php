<html>
	<head>
		
		<title>Cadastrar Usuário</title>
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
				var senha = document.getElementById("senha").value;
				var senha_check = document.getElementById("senha_check").value;
				var adm = document.getElementById("adm");
				
				if(nome == "")
				{
					alert("Campo Nome não foi preenchido!");
				}
				else if(email == "")
				{
					alert("Campo E-mail não foi preenchido!");
				}
				else if(senha == "")
				{
					alert("Campo Senha não foi preenchido!");
				}
				else if(senha_check == "")
				{
					alert("Campo Confimação de Senha não foi preenchido!");
				}
				else if(adm == "")
				{
					alert("Campo Confimação de Administrador não foi preenchido!");
				}
				else if(senha != senha_check)
				{
					alert("As senhas não são iguais!");
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
		<h2>Novo Usuário</h2>
		<form action="" method="post" id='form'>

			<div class="form-group">
				<label for="nome">Nome:</label>
				<input type="text" class="form-control" id="nome" name="nome_user" placeholder="Lucas João Silva">
			</div>

			<div class="form-group">
				<label for="email">E-mail:</label>
				<input type="email" class="form-control" id="email" name="email_user" placeholder="exemplo@exemplo.com">
			</div>
			
			<div class="form-group">
				<label for="senha">Senha:</label>
				<input type="password" class="form-control" id="senha" name="senha_user">
			</div>
			
			<div class="form-group">
				<label for="senha_check">Confirmação de Senha:</label>
				<input type="password" class="form-control" id="senha_check">
			</div>
			
			<div class="form-group">
				<label for="adm">Adminitrador:</label>
				<select class="form-control" id="adm_user" name="adm">
					<option name="sim" value="sim">Sim</option>
					<option name="nao" value="nao">Não</option>
				</select>
			</div>

			<input type='button' onclick='Validar()' value='Criar' class='btn btn-success' class='form-group'>
			<a class='btn btn-primary' href='?classe=User&acao=all'>Voltar</a>
		</form>
	</body>
</html>
