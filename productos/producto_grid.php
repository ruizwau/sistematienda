

<table id="idproductotabla" class="producto  table table-striped table-hover  table-bordered ">
    <thead class="text-center">
        <tr>
           
            <th>Nombre</th>
            <th>Marca</th>                                
            <th>Fecha de vencimiento</th>
            <th>Precio</th>  
            <th>Imagen</th>
            <th>Accion</th>
        </tr>
    </thead>
    <tbody>
    <?php
    while($rows=mysqli_fetch_array($q_producto_select )){
    ?>
        <tr>
          <td><?php echo $rows['nombre'] ?></td>
          <td><?php echo $rows['marco'] ?></td>
    	  <td><?php echo $rows['fechadevencimiento'] ?></td>
          <td><?php echo $rows['preciounitario'] ?></td>
    	  <td><img class="img-responsive " src="<?php echo $rows['imagen'] ?>"> </td>
          <td>
    <button type="button" id=" <?php echo $rows['idProducto'] ?>" class="btn btnEditar text-white btn-warning">Editar</button>
    <button type="button" id=" <?php echo $rows['idProducto'] ?>" class="btn btnBorrar  text-white btn-warning">Borrar</button>
          </td>
        </tr>
    <?php
        }
    ?>                                
    </tbody>        
</table>                    
 



     

