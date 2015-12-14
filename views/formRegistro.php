<br/>
<form action="index.php?c=controller&a=addNewSucursal&email=email&pass=pass&rfc=rfc&enc=enc&pat=pat&mat=mat&suc=suc&dir=dir; ?>" method="post">
  <div class="container">
    <div class="panel panel-success">
      <div class="panel-heading">Datos de registro</div>
      <div class="panel-body">
            <div class="form-group">
              <label>E-Mail:</label>
              <input type="email" class="form-control" placeholder="Ingrese su e-mail" name="email" required>
            </div>
            <div class="form-group">
              <label>Password:</label>
              <input type="password" class="form-control" placeholder="Cree un password" name="pass" required>
            </div>
            <div class="form-group">
              <label>RFC:</label>
              <input type="text" class="form-control" placeholder="Ingrese su RFC" name="rfc">
            </div>
            <div class="form-group">
              <label>Nombre:</label>
              <input type="text" class="form-control" placeholder="Nombre de la persona encargada" name="enc" required>
            </div>
            <div class="form-group">
              <label>Apellido paterno:</label>
              <input type="text" class="form-control" placeholder="Ingrese su Apellido Paterno" name="pat" required>
            </div>
            <div class="form-group">
              <label>Apellido materno:</label>
              <input type="text" class="form-control" placeholder="Ingrese su Apellido Materno" name="mat" required>
            </div>
            <div class="form-group">
              <label>Nombre de la SUCURSAL:</label>
              <input type="text" class="form-control" placeholder="Ingrese Nombre de la sucursal" name="suc" required>
            </div>
            <div class="form-group">
              <label>Direccion de la sucursal:</label>
              <input type="text" class="form-control" placeholder="Ingrese Direccion de la sucursal" name="dir" required>
            </div>
            <div class="form-group">
              <input type="submit" value="ACEPTAR" class="btn btn-success">
            </div>
      </div>
    </div>
  </div>
</form>

