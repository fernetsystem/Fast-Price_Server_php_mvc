<div class="container">
	<img src="img/log1.png" class="img-responsive" alt="Responsive image">
</div>
<div class="container">
<div class="row">
	<div class=" col-xs-8 col-md-4 col-xs-offset-2 col-md-offset-4">
		<div class="page-header">
  			<h1>Login<small> iniciar sesion</small></h1>
		</div>
			<form action="index.php?c=controller&a=valida&email=email&pass=pass; ?>" method="post">
				<div class="form-group">
					<input type="email" class="form-control" placeholder="E-mail" name="email" required>
				</div>
				<div class="form-group">
					<input type="password" class="form-control" placeholder="Password" name="pass" required>
				</div>
				<div class="form-group">
					<input type="submit" value="Login" class='btn btn-success btn-lg btn-block'>
				</div>
			</form>
		<div class="row">
  			<a href='index.php?c=controller&a=formRegistro' class='btn btn-link'><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span> Registrarte</a>
  			<a href='index.php?c=controller&a=formRecovery' class='btn btn-link'><span class='glyphicon glyphicon-envelope' aria-hidden='true'></span> Olvide mi password</a>
		</div>
	</div>
</div>
</div>