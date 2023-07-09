<?php
require_once 'aplicacao/inc/config.php';

$classe = isset($_GET['classe']) ? $_GET['classe'] : 'Cliente';
$acao = isset($_GET['acao']) ? $_GET['acao'] : 'all';
$_GET['id'] = isset($_GET['id']) ? $_GET['id'] : '1';

require_once 'aplicacao/controller/'.$classe.'Controller.php';

$controller = $classe."Controller";
$app = new $controller();
$app->$acao();







