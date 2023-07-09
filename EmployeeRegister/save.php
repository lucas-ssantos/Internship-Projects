<?php
session_start();

if(isset($_GET['id_user']) && isset($_GET['setor']) && isset($_SESSION['user_nome']))
{

$id = $_GET['id_user'];
$setor = $_GET['setor'];

$user_nome = $_SESSION['user_nome'];

$sql = $conn->prepare("UPDATE USERS SET USERSECTORID=? WHERE USERID=?");
$sql->execute(Array($setor,$id));


$sql = $conn->prepare("SELECT SECTORNAME as nome FROM SECTORS WHERE SECTORID = ?");
$sql->execute(Array($setor));
$row = $sql->fetchAll(PDO::FETCH_CLASS);

$setor_nome = $row[0]->nome;

$resposta = "O usuario ". $user_nome . " teve seu setor mudado para ". $setor_nome .".";

$_SESSION['resposta'] = $resposta;

header("Location: index.php");

}
else
{
session_destroy();
header("Location: index.php");
}

?>
