<?php
require_once 'inc/config.php';

$email = "";
$senha = "";

if(isset($_POST['email_user']) && isset($_POST['senha_user']))
{
	$email = $_POST['email_user'];
	$senha = $_POST['senha_user'];
	$senha = md5($senha);
}
else
{
	$_SESSION['msg'] = "<div class='alert alert-warning'><p>Houve erro ao fazer log-in.</p></div>";
	header("admin.php");
}
$con = new PDO(SERVIDOR, USUARIO, SENHA);
$sql = $con->prepare("SELECT * FROM users WHERE email_user=? AND senha_user=? AND adm_user = 1");
$sql->execute( array($email, $senha) );
$row = $sql->fetchObject();

if($row)
{
	$_SESSION['login'] = "logado";
    $_SESSION['msg'] = "<div class='alert alert-success'><p>Bem-vindo $row->nome_user !</p></div>";
	header('Location: area_restrita.php');
}
else
{
    $_SESSION['msg'] = "<div class='alert alert-warning'><p>E-mail ou Senha incorretas.</p></div>";
	header('Location: admin.php');
}







