<?php 
	include_once("verifica_login.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Finanças</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="js/jquery.maskMoney.min.js" type="text/javascript"></script>
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
				<li class="nav-item active">
					<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
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

 	<div class="container" style="box-shadow: 0 24px 38px 3px rgb(0 0 0 / 14%), 0 9px 46px 8px rgb(0 0 0 / 12%), 0 11px 15px -7px rgb(0 0 0 / 20%);margin-top: 5%">
	 	<form method="post" action="insere.php" style="margin-top: 5%" autocomplete="off">
			<div class="form-group">
			    <label for="exampleFormControlInput1" style="margin-top: 1%;">Título</label>
			    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo" maxlength="50" required="">
			</div>

			<div class="form-group">
				<label for="exampleFormControlSelect1">Date</label>
    			<input class="form-control" type="date" id="data" name="data">
			</div>

			<div class="form-group">
				<label for="exampleFormControlSelect1">Tipo: </label>
				<div class="form-check form-check-inline">						  	
					<input class="form-check-input" type="radio" name="tipo" id="renda" value="Renda" required="">
					<label class="form-check-label" for="inlineRadio1">Renda </label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="tipo" id="despesa" value="Despesa" required="">
				  	<label class="form-check-label" for="inlineRadio2">Despesa</label>
				</div>
			</div>
						
			<div class="form-group" id="div_natureza" style="display: none;">
			    <label for="exampleFormControlSelect1">Natureza</label>
			    <select class="form-control" id="natureza" name="natureza">
			      <option selected disabled="" value="0">Escolha uma opção</option>
			      <option value="Trasnporte">Transporte</option>
			      <option value="Alimentação">Alimentação</option>
			      <option value="Lazer">Lazer</option>
			    </select>
			</div>
			
			<div class="form-group">
				<label for="exampleFormControlSelect1">Valor</label>
				<input id="valor" type="text" class="form-control" id="valor" name="valor" placeholder="Valor" required="">
			</div>
			
			<div class="form-group">
			    <label for="exampleFormControlTextarea1">Descrição(Opcional)</label>
			    <textarea class="form-control" id="desc" name="desc" rows="3" maxlength="250"></textarea>
			</div>
			<button type="reset" class="btn btn-outline-danger btn-primary" style="width: 49% ;margin-bottom: 1%">Limpar</button>
			<button type="button" class="btn btn-outline-success btn-primary" data-toggle="modal" data-target="#exampleModalCenter"style="width: 50%;margin-bottom: 1%">Salvar</button>
			
			<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  				<div class="modal-dialog modal-dialog-centered" role="document">
    				<div class="modal-content">
      					<div class="modal-header">
        					<h5 class="modal-title" id="exampleModalLongTitle">Confirmar registro</h5>
        					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          						<span aria-hidden="true">&times;</span>
        					</button>
      					</div>
      					<div class="modal-body">
        					Deseja salvar o registro ? ele não podera ser alterado depois.
      					</div>
      					<div class="modal-footer">
        					<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        					<button type="submit" class="btn btn-primary">Salvar</button>
      					</div>
    				</div>
  				</div>
			</div>
	 	</form>
	</div>
</body>
<script type="text/javascript">
	$('#despesa').change(()=>{
		$('#renda').attr("required", "req");
		$('#div_natureza').removeAttr('style');
		$('#natureza').attr("required", "req");
    });
    $('#renda').change(()=>{
    	$('#despesa').attr("required", "req");
		$('#div_natureza').css({'display': 'none'});
		$('#natureza').removeAttr('required');
    });

	$("#valor").maskMoney({
		prefix:'R$ ',
		suffix:"",
		formatOnBlur:false,
		allowZero:false,
		allowNegative:true,
		allowEmpty:false,
		doubleClickSelection:true,
		selectAllOnFocus:false,
		thousands: '',
		decimal: '.' ,
		precision: 2,
		affixesStay :false,
		bringCaretAtEndOnFocus:true
	});
</script>
</html>
