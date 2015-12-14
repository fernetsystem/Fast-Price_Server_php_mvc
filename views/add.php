<br/>
<div class="container">
<div class="panel panel-success">
  <div class="panel-heading">Agregar nuevo producto</div>
  <div class="panel-body">
    <form action="index.php?c=controller&a=addNewProduct&nom=nom&des=des&cont=cont&cat=cat&exi=exi&pre=pre; ?>" method="post">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Nombre del producto" name="nom" required>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Descripcion" name="des" required>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Contenido" name="cont" required>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Categoria" name="cat" required>
        </div>
         <div class="form-group">
          <input type="text" class="form-control" placeholder="Existencia" name="exi" required>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Precio" name="pre" required>
        </div>
        <div class="form-group">
          <input type="submit" value="Añadir producto" class="btn btn-success">
        </div>
      </form>
  </div>
</div>
</div>