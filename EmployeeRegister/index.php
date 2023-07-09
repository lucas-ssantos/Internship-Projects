<?php

$servername = "localhost";
$username = "lucas"; 
$password = "1q2w3e";

try
{
    $conn = new PDO("mysql:host=$servername;dbname=INTERNAL_MANAGEMENT", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}

$acao = isset($_GET['acao']) ? $_GET['acao'] : 'all';
$_GET['id'] = isset($_GET['id']) ? $_GET['id'] : '1';

require_once($acao.'.php');


?>
