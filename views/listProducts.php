<div class="container">
  <h1>Fast Price<small> Mis Productos</small></h1>
  <a href='index.php?c=controller&a=formNewProduct' class='btn btn-success btn-lg btn-block'><span class='glyphicon glyphicon-plus' aria-hidden='true'></span> Agregar nuevo producto</a>
  <br/>
<div class="table-responsive">
<table class="table table-hover">
        <thead>
          <tr>
              <th>PRODUCTO</th>
              <th>DESCRIPCION</th>
              <th>CONTENIDO</th>
              <th>CATEGORIA</th>
              <th>EXISTENCIA</th>
              <th>PRECIO</th>
          </tr>
        </thead>
        <tbody>
        	<?php foreach ($datos as $data) {
        		echo "<tr>";
	        		echo "<td>".$data['nombre_pro']."</td>";
	        		echo "<td>".$data['descripcion']."</td>";
              echo "<td>".$data['contenido']."</td>";
              echo "<td>".$data['categoria']."</td>";
              echo "<td>".$data['existencia']."</td>";
              echo "<td>".$data['precio']."</td>";
              echo "<td><a href='index.php?c=controller&a=formUpdate&id=".$data['idproducto']."' class='btn btn-info '><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span> Editar</a></td>";
              echo "<td><a href='index.php?c=controller&a=formDelete&idpr=".$data['idproducto']."' class='btn btn-danger '><span class='glyphicon glyphicon-remove' aria-hidden='true'></span> Eliminar</a></td>";
     		    echo "</tr>";
        	} ?>
        </tbody>
</table>
</div>
</div>