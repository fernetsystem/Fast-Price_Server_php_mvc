<div class="container">
	<img src="img/log1.png" class="img-responsive" alt="Responsive image">
</div>
<div class="container">
	<div class="row">
		<div class=" col-xs-8 col-md-4 col-xs-offset-2 col-md-offset-4">
			<div class="page-header">
	  			<h3>Recuperar password<small></small></h3>
			</div>
			<form action="index.php?c=controller&a=recoverPass&email=email; ?>" method="post">
				<div class="form-group">
					<input type="email" class="form-control" placeholder="Ingrese su e-mail" name="email" required>
				</div>
				<div class="form-group">
					<input type="submit" value="Enviar correo" class='btn btn-info btn-lg btn-block'>
				</div>
			</form>
		</div>
	</div>
</div>