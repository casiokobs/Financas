<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
	<script src="jquery.maskMoney.min.js" type="text/javascript"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="">Finança</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarColor01">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="index.php">Home</a>
				</li>
				<li class="nav-item active">
					<a class="nav-link" href="historico.php">Historico</a>
				</li>
				<!-- <li class="nav-item">
					<a class="nav-link" href="graficos.php">Graficos</a>
				</li> -->
				<li class="nav-item">
					<a class="nav-link" href="logout.php">Sair</a>
				</li>
			</ul>
		</div>
	</nav>
	<div>
	<?php
		include_once("conexao.php");
		include_once("verifica_login.php");
		$sql = mysqli_query($conexao, "SELECT * FROM controle where user ='".$_SESSION['id']."' order by data_reg desc"); 
		$sum_d = mysqli_query($conexao, "SELECT sum(valor) FROM controle where tipo ='Despesa'and user ='".$_SESSION['id']."'"); 
		$sum_r = mysqli_query($conexao, "SELECT sum(valor) FROM controle where tipo ='Renda' and user ='".$_SESSION['id']."'"); 
		$soma_d = mysqli_fetch_assoc($sum_d);
		$soma_r = mysqli_fetch_assoc($sum_r);
		$registros = mysqli_num_rows($sql);
		

		mysqli_close($conexao);
		echo "<ul class='collection-header'><h4 style='text-align: center;'>".$registros. " Registro(s) Encontrado(s) para ".$_SESSION['usuario']."</h4></ul>";
		echo "<ul class='collection-header'><h4 style='text-align: center;'>Total de Renda bruta: ".$soma_r['sum(valor)']."</h4></ul>"; 
		echo "<ul class='collection-header'><h4 style='text-align: center;'>Total de Despesas: ".$soma_d['sum(valor)']."</h4></ul>"; 
		echo "<ul class='collection-header'><h4 style='text-align: center;'>Total de renda liquida: ".$soma_r['sum(valor)']-$soma_d['sum(valor)']."</h4></ul>"; 
		echo "<br>";
		echo "<table class='centered'>";

		while($aux = mysqli_fetch_assoc($sql)) { 	
			// echo "<ul class='collection with-header z-depth-5'>
   //     						<li class='collection-header'><h4 <h4 style='text-align: center;'>".$aux["titulo"]."</h4><a style='margin-left: 91%' href=deleta.php?id=".$aux['id'].">Deletar</a><a style='margin-left: 2%' href=edita.php?id=".$aux['id'].">Editar</a></li>
   //     						<li class='collection-item'>".$aux["desc"]."</li>
   //     						<li class='collection-item'>Valor: ".$aux["data"]."</li>
   //     						<li class='collection-item'>Valor: ".$aux["valor"]."</li>
   //     						<li class='collection-item'>Tipo: ".$aux["tipo"]."</li>
   //     						<li class='collection-item'>Natureza: ".$aux["natureza"]."</li>
   //  					</ul>";
    		echo "<div class='card text-center'>
  					 
	  				<div class='card-body'>
	  					<h5 class='card-title'>".$aux["titulo"]."</h5>
	  					<ul class='list-group list-group-flush'>
    						<li class='list-group-item'>Descrição : ".$aux["descricao"]."</li>
						    <li class='list-group-item'>Natureza : ".$aux["natureza"]."</li>
    						<li class='list-group-item'>Tipo : ".$aux["tipo"]."</li>
    						<li class='list-group-item'>Valor : ".$aux["valor"]."</li>
  						</ul>
	    				<a href='deleta.php?id=".$aux['id']."' class='btn btn-primary'>Deletar</a>
	  				</div>
	  				<div class='card-footer text-muted'>
	    				Criado em: ".$aux["data_reg"]."
	  				</div>
				</div>
				<br>";
			};
			
	?>

		
	</div>
</body>
</html>