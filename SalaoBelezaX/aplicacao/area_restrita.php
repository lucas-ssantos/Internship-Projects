<?php
require_once 'inc/config.php';

if(isset($_SESSION['login']))
{
	if($_SESSION['login'] != "logado")
	{
		header('Location: admin.php');
	}
}
else
{
	header('Location: admin.php');
}

$classe = isset($_GET['classe']) ? $_GET['classe'] : 'User';
$acao = isset($_GET['acao']) ? $_GET['acao'] : 'all';
$_GET['id'] = isset($_GET['id']) ? $_GET['id'] : '1';

if($acao == "deslogar")
{
	session_destroy();
	header('Location: admin.php');
}

require_once 'controller/'.$classe.'Controller.php';

$controller = $classe."Controller";
$app = new $controller();
$app->$acao();







