<?php
session_start();
include_once("conexao.php");
if (empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: login.php');
	exit();
}
$usuario = mysqli_real_escape_string($conexao,$_POST['usuario']);
$senha = mysqli_real_escape_string($conexao,$_POST['senha']);
$sql ="SELECT * FROM usuarios WHERE user ='$usuario' and senha =MD5('$senha')";
$result = mysqli_query($conexao,$sql);

$row = mysqli_num_rows($result);


if ($row == 1) {
	$_SESSION['usuario'] = $usuario;
	$teste = mysqli_fetch_assoc($result);
	$_SESSION['id'] = $teste['id'];
	// echo $_SESSION['id'];
	header('Location: index.php');
	exit();
}else{
	header('Location: login.php');
	exit();
};
?>