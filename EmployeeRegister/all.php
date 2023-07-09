<?php

session_start();

$sql = $conn->prepare("SELECT USERS.USERID as id, USERS.USERNAME as nome, USERS.USERLOGIN as login, SECTORS.SECTORNAME as nome_setor FROM USERS INNER JOIN SECTORS ON USERS.USERSECTORID = SECTORS.SECTORID");
$sql->execute();

$rows = $sql->fetchAll(PDO::FETCH_CLASS);

?>

<html>
<head>

<title>Editar Setor</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
<?php

if(isset($_SESSION['resposta']))
{
$resposta = $_SESSION['resposta'];
echo "<section style='background-color: #32CD32; border: 2px solid #006400; color: black;'><b>". $resposta ."</b></section>";
unset($_SESSION['resposta']);
session_destroy();
}


echo "<table class='w3-table-all'><tr><th>ID</th><th>Usuario</th><th>Login</th><th>Setor</th><th></th></tr>";


foreach($rows as $row)
{
  echo "<tr><td>".$row->id."</td><td>".$row->nome."</td><td>".$row->login."</td><td>".$row->nome_setor."</td><td><form method='get' action=''><input type='number' name='id' value=". $row->id ." hidden><button class='btn btn-info'  name='acao' value='editar'>Mudar Setor</button></form></td></tr>";
}

echo "</table>";

?>

</body>
</html>

