<?php
	$hostname = "localhost";
	$user = "root";
	$password = "";
	$database = "financa";
	$conexao = mysqli_connect($hostname,$user,$password,$database); 

	if(!$conexao){
		echo("Falha na conexao");
	}
	
?>