<?php
	// session_start();
	include_once('conexao.php');
	include_once("verifica_login.php");

	$sql = "INSERT INTO `controle` (`user`,`titulo`,`tipo`,`valor`,`natureza`,`descricao`,`data_reg`) VALUES 
	('".$_SESSION['id']."','".$_POST['titulo']."','".$_POST['tipo']."','".$_POST['valor']."','".$_POST['natureza']."','".$_POST['desc']."','".$_POST['data']."')";

	$salvar = mysqli_query($conexao,$sql);

	echo ($sql);

	$linhas = mysqli_affected_rows($conexao);
    mysqli_close($conexao);
	if($linhas == 1){
		header("Location: index.php");
	}
    
?>