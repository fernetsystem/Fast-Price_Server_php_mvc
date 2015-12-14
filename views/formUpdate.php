<br/>
<div class="container">
<div class="panel panel-info">
  <div class="panel-heading">Modificar producto</div>
  <div class="panel-body">
    <?php foreach ($datos as $data) { ?>
    <form action="index.php?c=controller&a=updateProduct&id=id&nom=nom&des=des&cont=cont&cat=cat&exi=exi&pre=pre; ?>" method="post">
        <input type="hidden" name="id" value=<?php echo $data['idproducto'];?> >
        <div class="form-group">
          Nombre:
          <input type="text" class="form-control" placeholder="Nombre del producto" name="nom" value=<?php echo $data['nombre_pro'];?> required>
        </div>
        <div class="form-group">
          Descripción:
          <input type="text" class="form-control" placeholder="Descripcion" name="des" value=<?php echo $data['descripcion']; ?> required>
        </div>
        <div class="form-group">
          Contenido:
          <input type="text" class="form-control" placeholder="Contenido" name="cont" value=<?php echo $data['contenido']; ?> required>
        </div>
        <div class="form-group">
          Categoria:
          <input type="text" class="form-control" placeholder="Categoria" name="cat" value=<?php echo $data['categoria']; ?> required>
        </div>
         <div class="form-group">
          Existencia:
          <input type="text" class="form-control" placeholder="Existencia" name="exi" value=<?php echo $data['existencia']; ?> required>
        </div>
        <div class="form-group">
          Precio:
          <input type="text" class="form-control" placeholder="Precio" name="pre" value=<?php echo $data['precio']; ?> required>
        </div>
        <div class="form-group">
          <input type="submit" value="Guardar cambios" class="btn btn-success">
        </div>
      </form>
      <?php } ?>
  </div>
</div>
</div>