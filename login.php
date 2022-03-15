
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<style>
body, html {
  height: 100%;
  margin: 0;
}

.bg {
  background-image: url('https://images2.alphacoders.com/542/thumb-1920-542730.png');
  height: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
<body>
	<div class="bg">
		<div class="container">
		  	<div class="row">
		    	<div class="col-sm-9 col-md-7 col-lg-5 mx-auto" style="margin-top: 15%;">
			      	<div class="card-signin my-5" style="background-color: rgb(65 37 39 / 65%);">
			        	<div class="card-body">
			          		<h5 class="card-title text-center" style="color: #ffc107">Faça o seu Login</h5>
			          		<form class="form-signin" method="post" action="valida_login.php" autocomplete="off">
			            		
			            		<div class="form-label-group">
			              			<input type="text" name="usuario" id="inputEmail" class="form-control" placeholder="Usuario" required autofocus>
			              			<label for="user" style="color: #ffc107">Usuario</label>
			            		</div>

					            <div class="form-label-group">
			              			<input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Senha" required>
			              			<label for="pass" style="color: #ffc107">Senha</label>
			            		</div>
			            		
			            		<button class="btn btn-lg btn-block text-uppercase btn-outline-warning"  type="submit">Sign in</button>
			          		</form>
			        	</div>
			      	</div>
		    	</div>
		  	</div>
		</div>
	</div>
</body>
</html>